FROM php:7.4-cli
COPY . /Users/emreh/PhpstormProjects/atolye15
WORKDIR /Users/emreh/PhpstormProjects/atolye15
CMD [ "php", "./index.php" ]