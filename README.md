**Louve Skincare Homepage - Project Documentation**

---

### 📄 Basic Information

**Project:** Louve Skincare Homepage
**Developer:** Sidorela
**Stack:** HTML, CSS, PHP (Localhost with XAMPP)
**Repository:** [https://github.com/Sidorela93/Louve\_Skincare\_Sidorela](https://github.com/Sidorela93/Louve_Skincare_Sidorela)
**Date:** 15 May 2025

---

### 🔹 Technologies Used

* **HTML & CSS** — for structure and styling
* **PHP** — to handle the form functionality (send.php)
* **XAMPP** — local development server (Apache & PHP)
* **VS Code** — code editor
* **Git & GitHub** — version control and project sharing
* **Google Images / Canva** — sample illustrations for brand sections
* **Dummy Analytics** — form submission is logged in form\_log.txt

---

### 🎨 Section Overview (with Screenshots)

#### 🌟 Hero Section ![image](https://github.com/user-attachments/assets/b8cef253-94ab-46df-8cb9-2324366b9746)


* Tagline: "Glow Naturally. Love Endlessly."
* Subheading: 100% Organic Skincare made with Albanian-grown lychee extract
* Action Button: \[Explore Products]
* Visual: Full-width image banner (Canva image)

#### 💚 About the Brand ![image](https://github.com/user-attachments/assets/d63645c1-31ec-4e0b-979f-9274c5f90be4)


* Short brand introduction
* Focus on cruelty-free, eco-conscious products
* Highlighted ingredient: Lychee from the Albanian Riviera
* Layout: Text left, image right (responsive)

#### 🧼 Product Categories ![image](https://github.com/user-attachments/assets/f692f3b5-5d69-4779-a4df-14aea4003b84)


* Face Care: Cleanser, Moisturizer, Toner, Vitamin C Serum, SPF 30
* Body Care: Body Lotion, Body Mist
* Hair Care: Amabilis & Bestia Hair Perfumes
* Design: Visual cards or columns with image + label

#### ✨ Highlights Section ![image](https://github.com/user-attachments/assets/0bb4195c-b3be-4094-88b0-6ba3f76967cb)

  * 100% Organic
  * Dermatologist-Tested
  * Cruelty-Free
  * Made in Albania
  * Free Delivery over 4,000 Lek


#### 🗣 Testimonials ![image](https://github.com/user-attachments/assets/107173f1-b8c8-4000-b9af-c422dad8269d)


* 2 user quotes

  * "Louve is my new obsession!" – Sara M.
  * "The hair perfume is out of this world." – Elira D.
* User photos + stars or styled quotes
* Two-column responsive layout

#### 📩 Footer ![image](https://github.com/user-attachments/assets/096f982e-f743-49ca-85d3-c5083e52dc38)


* Brand logo on the left
* Contact email: [info@louve.al](mailto:info@louve.al)
* Instagram link: @louve.club with icon
* Fully responsive, clean dark style

![image](https://github.com/user-attachments/assets/4b2ba2e1-515b-412e-8877-ea5a9dc86b5c) 
![image](https://github.com/user-attachments/assets/0da7040d-23b5-439d-9eb2-01a5e8e056f0)



### 📢 Functional Form  ![image](https://github.com/user-attachments/assets/433f6014-aff7-4caa-b8ed-f49752bba666)
![image](https://github.com/user-attachments/assets/06de4f3f-4692-4b47-9758-aa95ad547cf3)

![image](https://github.com/user-attachments/assets/4c1c89ea-6d1d-43dc-a5bd-194ede6b57d0)



* Contact form in the homepage
* On submit: data is POSTed to `send.php`
* Form data is logged to `form_log.txt`
* Redirects to `thankyou.html`

---

### 📁 File Structure

```
Louve_Skincare_Sidorela/
|│-- assets/
|│   ├-- images/
|│   └-- style.css
|│-- index.php
|│-- send.php
|│-- thankyou.html
|│-- form_log.txt
```

* Organized asset directory
* PHP scripts in root for simplicity
* Image and CSS assets are stored in `assets/`

---

### ⚡ Installation Instructions (on another PC)

1. **Clone the repository:**

```bash
git clone https://github.com/Sidorela93/Louve_Skincare_Sidorela.git
```

2. **Move the folder to your XAMPP `htdocs` directory.**
3. **Start XAMPP and enable Apache.**
4. **Visit the following link in your browser:**

```
http://localhost/Louve_Skincare_Sidorela
```

5. **Test the form:** Submit a message and check if `form_log.txt` gets updated.

---

### 📓 Final Notes

* The project is built fully responsive with semantic code.
* It can be deployed on any PHP-compatible server.
* Ideal for showcasing frontend layout skills with light backend logic.


