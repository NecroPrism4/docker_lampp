# Setup Instructions

This repository contains a Docker configuration for setting up a local development environment with PHP, MySQL, and phpMyAdmin.

## Prerequisites

Before you begin, make sure you have Docker installed on your machine.

## Getting Started

###1. Clone this repository to your local machine:

```git clone <repository-url>```

Navigate to the cloned repository:

```cd <repository-directory>```

Create a .env file and specify your desired environment variables. You can use the .env.example file as a template.

Build and start the Docker containers:
```docker-compose up -d```
Access your PHP environment at http://localhost:9000 and phpMyAdmin at http://localhost:9001.

