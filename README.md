# web_development_laraver_vue
 web development with laravel and vue

# to run project
  add env file in docker folder project and its front that you want 
  to run next build containers in docker folder to do it run command 
  podman-compose up --build

  if you have problems with permission use 
  chown -R www-data:www-data . 
  or in container use 
  podman exec -it laravel_app bash chown -R www-data:www-data html 
  bentley/storage chmod -R 775 html/bentley/storage