# ecommerce-product-recommendation-system

Personalized Product Recommendations Using Machine Learning

# Project Overview

The E-Commerce Product Recommendation System is a web-based application designed to improve the online shopping experience by suggesting relevant products to users.

The system integrates an e-commerce shopping portal with a recommendation mechanism based on Cosine Similarity. It analyzes product-related information and identifies similar products to generate relevant recommendations.

The main objective is to help users discover products more easily while providing a more personalized shopping experience.

# Key Features

- Product Recommendations: Suggest relevant products based on product similarity.
- Cosine Similarity: Uses a similarity-based recommendation technique to identify related products.
- Product Management: Organizes and displays available products.
- Product Information: Provides product details through the shopping portal.
- Database Integration: Stores and manages product information using MySQL.
- E-Commerce Interface: Provides an interface for browsing and exploring products.
- Recommendation Engine: Uses Python to perform product similarity calculations.

# Technology Stack

## Frontend

- HTML
- CSS
- JavaScript

## Backend

- PHP

## Database

- MySQL

## Recommendation Engine

- Python
- Cosine Similarity

## Tools

- Visual Studio Code
- XAMPP
- Git and GitHub

# How It Works

1. Product Data: Product information is stored and managed in the MySQL database.
2. Data Processing: Python processes the available product information.
3. Similarity Calculation: Cosine Similarity is applied to calculate similarity between products.
4. Recommendation Generation: The system identifies similar products and generates recommendations.
5. Product Display: Recommended products are presented through the e-commerce shopping portal.

# Project Structure

E-Commerce-Recommendation-System/
│
├── PHP/
│   ├── index.php
│   ├── product/
│   └── other portal files
│
├── Python/
│   └── recommendation.py
│
├── Database/
│   └── database.sql
│
└── README.md

Note: This is an illustrative structure. Actual folder and file names may differ.

# Installation and Setup

1. Clone the Repository

https://github.com/Prajakta-Kulkarni24/ecommerce-product-recommendation-system-.git

2. Navigate to the Project

cd E-Commerce-Recommendation-System

3. Set Up the PHP Application

- Install XAMPP.
- Copy the project folder into the "htdocs" directory.
- Start Apache and MySQL from the XAMPP Control Panel.

4. Configure the Database

- Open phpMyAdmin.
- Create the required MySQL database.
- Import the provided SQL file, if included.
- Update the database connection settings in the PHP configuration file.

5. Set Up Python

Install Python and the required dependencies.

pip install pandas numpy scikit-learn

Install only the packages required by your actual implementation.

6. Run the Application

Open your browser and visit:

http://localhost/shopping/

Adjust the URL according to your actual project folder and entry point.

# Recommendation Technique

Cosine Similarity

Cosine Similarity is a mathematical technique used to measure the similarity between two vectors.

It calculates the cosine of the angle between two vectors to determine how similar they are.

The formula is:

[
\text{Similarity}(A,B)=
\frac{A\cdot B}{|A||B|}
]

A higher similarity score indicates that two product representations are more similar.

# Project Objectives

- Develop a functional e-commerce shopping portal.
- Implement a product recommendation mechanism.
- Apply Cosine Similarity for identifying similar products.
- Integrate PHP, Python, and MySQL.
- Improve product discovery and the online shopping experience.

# Future Enhancements

- User-based personalized recommendations.
- Advanced machine learning recommendation algorithms.
- Improved product filtering and searching.
- Real-time recommendation updates.
- Enhanced user experience and interface.

# Project Information

Project Name: E-Commerce Recommendation System

Category: Web Development and Machine Learning

Recommendation Technique: Cosine Similarity

Purpose: To provide relevant product recommendations through an e-commerce shopping portal.

# Author

Developed as an academic project.
