#!/bin/bash
# This gives the user a prompt with often-needed commands.
# When the user makes a choice, it will run the command 
# on all drupal subsites (as well as the default/main site).

# Version 2.0 Now it uses the built-in drush macro to run
# the drush command on all sites.
# Also, the commands are now all run with 'www-data' permissions,
# which will prevent file permission errors and will let the
# user run this script without explicitly setting the user.
# Of course, if the current user isn't allowed to run as
# www-data, this will fail.

user_and_command='sudo -su www-data ' #run as user www-data. prevents file permission errors.

drush_prefix='drush --yes @sites --root=/data/web/drupal/current'
# drush: the main command to run
# --yes: noninteractive
# @sites: lists main site and all subsites (build-in drush macro)
# --root: location of drupal core

echo "Choose the commande to execute : "
echo "1. update database"
echo "2. put sites offline"
echo "3. put sites online"
echo "4. rebuild permissions"
echo "5. clear all cache"
echo "6. clear css+js cache"
echo "7. clear specific cache"
echo "8. install specific module"
echo "9. disable specific module"
echo "10. uninstall specific module"
echo -n "Input [1,2,3,4,5,6,7,8,9, or 10] ? "
read choice

if [ $choice -gt 7 ] ; then
  echo -n "Extension (module/theme) name ? "
  read ext
fi

# For each site, execute the command
  echo ----------
  echo $site
  cd $site  
  if [ $choice -eq 1 ] ; then
    $user_and_command $drush_prefix updatedb
  elif [ $choice -eq 2 ] ; then
    $user_and_command $drush_prefix vset --always-set maintenance_mode 1
  elif [ $choice -eq 3 ] ; then
    $user_and_command $drush_prefix vset --always-set maintenance_mode 0
  elif [ $choice -eq 4 ] ; then
    $user_and_command $drush_prefix php-eval 'node_access_rebuild();'
  elif [ $choice -eq 5 ] ; then
    echo $user_and_command $drush_prefix cc all
    $user_and_command $drush_prefix cc all
  elif [ $choice -eq 6 ] ; then
    $user_and_command $drush_prefix cc css-js
  elif [ $choice -eq 7 ] ; then
    $user_and_command $drush_prefix cc
  elif [ $choice -eq 8 ] ; then
    $user_and_command $drush_prefix pm-enable $ext
  elif [ $choice -eq 9 ] ; then
    $user_and_command $drush_prefix pm-disable $ext
  elif [ $choice -eq 10 ] ; then
    $user_and_command $drush_prefix pm-uninstall $ext
  fi

