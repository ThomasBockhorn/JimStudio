# JimStudio

## Introduction
Felder Studio is a profolio website for Jim Felder and his paintings. He wanted to showcase his work. Further, if a vistor wanted to buy any of his pieces, he wanted them to be able to contact them with his email.

## Technologies
Project is created with: Laravel 9, Vue 3, Tailwind CSS, Inertia JS, MySQL. I choose these technologies because it would give him and his visitors a great UX experience. I created a landing page also that is based on Laravel blade. Using Laravel blade will make it easier for SEO.

## Design
We went with a simple UI design that showcased his work while making it easy for visitors to interact with the website. The SPA only has a navbar that allows the user to navigate to the home page, the gallery, and the contact page. The landing page has his image with a button that takes the user to the gallery page. The gallery page has his paintings. The navbar will show a new menu item that allows the user to choose what category to see. The contact page just has information and his contact info if they choose to contact him. The about page is just a simple page that has a bit of information about him.

Dashboard link will take you to the login page. Only one user can long in. The dashboard will allow the user to add and delete paintings. The dashboard also gives the user the opportunity to change the status of the painting from available to unavailable.

## Coding Design
In addition, of using controller for painting model, I also created painting services to separate out the business logic from the controller. I chose not to use an interface class since I only have one class. If more are created in subsequent versions, I will create an interface class for them.
