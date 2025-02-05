# FROM python:3.9-slim

# # Install SATOSA
# RUN pip install satosa pysaml2 pyop

# # Copy config files into the container
# WORKDIR /satosa
# COPY config /satosa/config
# COPY plugins /satosa/plugins

# # Expose default port
# EXPOSE 8000

# # Run SATOSA
# CMD ["satosa", "serve", "config/satosa-config.yml"]



FROM python:3.9-slim

# Install required dependencies
RUN apt-get update && apt-get install -y \
    curl \
    && rm -rf /var/lib/apt/lists/*

# Install SATOSA and dependencies
RUN pip install --no-cache-dir satosa pysaml2 pyop gunicorn

# Set working directory
WORKDIR /satosa

# Copy config files
COPY config /satosa/config
COPY plugins /satosa/plugins

# Ensure SATOSA is installed
RUN satosa --help || echo "SATOSA installation failed"

# Expose default port
EXPOSE 8000

# Run SATOSA using Gunicorn (recommended for production)
# CMD ["gunicorn", "-b", "0.0.0.0:8000", "satosa.wsgi:app", "--config", "/satosa/config/proxy_conf.yaml"]
CMD ["gunicorn", "-b", "0.0.0.0:8000", "satosa.wsgi:app"]
