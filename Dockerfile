# Set the base image to CentOS
FROM centos:7.2.1511

# File Author / Maintainer
MAINTAINER Itari Ighoroje

# Install Software
RUN yum install httpd php php-mysql -y


# Setup Environment Variables
# Some of these variables will be passed in at runtime
ENV APP_DIR /var/www/html/wordpress
ENV WORK_DIR /tmp
ENV DB_HOST ""
ENV DB_NAME ""
ENV DB_USER ""
ENV DB_PASSWORD ""


# Expose the following ports
EXPOSE 80 443


# Setup Application paths
RUN mkdir -p $APP_DIR

WORKDIR ${WORK_DIR}


# Copy application files
COPY wordpress $APP_DIR
COPY start-app.sh $WORK_DIR
COPY env.conf.template $WORK_DIR


# Install Dependencies


# Setup Permissions
RUN chown -R apache /var/www/html/wordpress/wp-content        # grant apache user access to write to the filesystem


# Run the application
ENTRYPOINT ["./start-app.sh"]

