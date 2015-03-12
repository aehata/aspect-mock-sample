FROM ubuntu:14.04
MAINTAINER aehata

ENV DEBIAN_FRONTEND noninteractive

# set locale
run locale-gen en_US.UTF-8
run update-locale LANG=en_US.UTF-8
env LC_ALL C
env LC_ALL en_US.UTF-8

RUN apt-get update && \
    apt-get install -yq --force-yes php5 php5-curl

