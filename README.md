# Setup Instructions

This repository contains a Docker configuration for setting up a local development environment with PHP, MySQL, and phpMyAdmin.

## Prerequisites

Before you begin, make sure you have Docker installed on your machine.

## Getting Started

You can clone this repository to your local machine:

```git clone https://github.com/NecroPrism4/docker_lampp.git```

Navigate to the cloned repository:

```cd docker_lampp```

Create a .env file and specify your desired environment variables. You can use the .env.example file as a template.

Build and start the Docker containers:
```docker-compose up -d```
Access your PHP environment at http://localhost:9000 and phpMyAdmin at http://localhost:9001.

