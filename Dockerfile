# Escolha uma imagem PHP oficial como base
FROM php:latest

# Defina o diretório de trabalho para o diretório do aplicativo PHP
WORKDIR /var/www/html

# Copie os arquivos do código-fonte da aplicação para o contêiner
COPY . /var/www/html

# Expõe a porta 80 para que possamos acessar a aplicação web através do navegador
EXPOSE 80

# O comando para iniciar o servidor web e o PHP (por exemplo, Apache)
# Dependendo da imagem PHP oficial que você está usando, pode ser necessário instalar e configurar um servidor web separadamente.
CMD ["php", "-S", "0.0.0.0:80"]
