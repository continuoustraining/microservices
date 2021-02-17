# MICROSERVICE BUILD DEMO

## parts

.gitlab-ci.yml to play app build and docker build. 
  
Dockerfile base on php:7.4-apache
  
ci/database.php to setup database at launch. 

## RUN IN GITLAB

Define the variables AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY for production env.  
Define DB_NAME,DB_HOST,DB_USER and DB_PASS. 

## run locally

copy  .env.dist.  to .env
set up variables with right values (from gitlab)

run docker-compose up. 