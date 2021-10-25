# Image being used
FROM php:8-fpm

# Change default port number
RUN sed -i 's/9000/9001/' /usr/local/etc/php-fpm.d/zz-docker.conf


# Set working directory
WORKDIR /var/www/cinema_app


# Install dependencies
RUN apt-get update


# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*


# Install composer
RUN curl -sS https://getcompser.org/installer | php -- \
	--install-dir=/usr/local/bin \
	--filename=composer


# Add user for application
RUN groupadd -g 100 app
RUN useradd -u 1000 -ms /bin/bash -g app app


# Copy existing application directory contents
COPY ./cinema_app  /var/www/cinema_app


# Copy existing application directory permissions
COPY --chown=app:app . /var/www/cinema_app


# Change current user to newly created user
USER app


# Expose port and start pph-fpm server
EXPOSE 9001
CMD ["php-fpm"]
