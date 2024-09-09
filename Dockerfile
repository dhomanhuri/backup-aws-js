# Use the official Nginx image from the Docker Hub
FROM nginx:alpine

# Copy your HTML and JavaScript files to the Nginx html directory
COPY . /usr/share/nginx/html

# Expose port 80
EXPOSE 80

# Start Nginx server
CMD ["nginx", "-g", "daemon off;"]
