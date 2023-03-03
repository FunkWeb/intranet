# FunkWeb Suksess for alle Intranet Solution

This is the repository for the intranet solution for FunkWeb Suksess for alle. The intranet solution is a centralized platform for internal communication, document management, and job postings. It is built using the Laravel framework and is hosted on [hosting solution]. User authentication and authorization are handled through Google Oauth, and the document management system uses Google Drive as the backend for storing and managing documents.

## Installation

1. Clone the repository to your local machine.
2. Install dependencies with `composer install`.
3. Set up a Google API project for Oauth authentication and copy the credentials to the `.env` file.
4. Configure the database connection in the `.env` file.
5. Run database migrations with `php artisan migrate`.

## Features

The intranet solution includes the following features:

- User authentication and authorization with Google Oauth
- Company news and events section
- Document management system with Google Drive backend
- Internal messaging system
- Job board section with external job postings integration
- Support system for employees and candidates to contact IT or HR

## Usage

To use the intranet solution, simply log in with your Google credentials. Different user roles have specific permissions to access content and features. Full-time employees in department A and department B have access to all features of the intranet solution, while HR employees have access to HR-related content and features. Candidates have limited access to the intranet solution, with permissions to view company news and events, access the job board, and send messages to internal recruiters.

## Contributing
If you would like to contribute to the intranet solution, please follow the standard Git flow approach with feature branches and pull requests. Please ensure that your code is thoroughly tested and adheres to the coding standards and guidelines established for the project.

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).

