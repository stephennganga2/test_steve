<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Joel Mukwekwe | Portfolio</title>
  <link rel="icon" type="image/x-icon" href="https://www.bing.com/images/search?q=portfolio+icon&id=E98ED628D74A50583F98A2F095E75E27EFC5B295&FORM=IACFIR"/>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f9f9f9;
      color: #333;
    }

    .hero {
      background: linear-gradient(to bottom, #0a121e, #1a2d44, rgba(36, 59, 85, 0.85));
      color: white;
      padding: 100px 20px;
      text-align: center;
      animation: fadeIn 2s ease-out;
    }
    .hero-text a,
    .hero-text button {
      margin: 10px;
      padding: 12px 20px;
      background: #e67e22;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .hero-text a:hover,
    .hero-text button:hover {
      background: #d35400;
    }

    .section {
      padding: 50px 20px;
      text-align: center;
    }

    .about-content {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }
    .about-img {
      width: 150px;
      border-radius: 50%;
      transition: transform 0.8s;
    }
    .about-img:hover {
      transform: rotateY(360deg);
    }

    .skills-list li {
      display: inline-block;
      margin: 10px;
      padding: 10px 15px;
      background: #243b55;
      color: white;
      border-radius: 5px;
      transition: transform 0.3s;
    }
    .skills-list li:hover {
      transform: scale(1.1);
    }

    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }
    .gallery img {
      width: 100%;
      max-width: 250px;
      margin: 10px;
      cursor: pointer;
      transition: transform 0.5s ease;
      border-radius: 8px;
    }
    .gallery img:hover {
      transform: scale(1.05) rotate(2deg);
    }

    .blog-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }
    .blog-card {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }
    .blog-card:hover {
      transform: translateY(-5px);
    }

    .lightbox-overlay {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.9);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }
    .lightbox-overlay.active {
      display: flex;
    }
    .lightbox-overlay img {
      max-width: 90%;
      max-height: 90%;
      border-radius: 10px;
      animation: zoomIn 0.4s ease-in-out;
    }
    .lightbox-close {
      position: absolute;
      top: 20px;
      right: 30px;
      font-size: 2rem;
      color: #fff;
      cursor: pointer;
    }

    .glass-section .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }
    .glass-card {
      background: rgba(255,255,255,0.15);
      padding: 30px;
      width: 300px;
      color: rgb(11, 11, 11);
      border-radius: 16px;
      text-align: center;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255,255,255,0.2);
      box-shadow: 0 8px 32px rgba(31,38,135,0.37);
    }

    .popup {
      display: none;
      position: fixed;
      top: 20%;
      left: 50%;
      transform: translate(-50%, 0);
      background: white;
      border-radius: 8px;
      padding: 30px;
      z-index: 9999;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }
    .popup.active {
      display: block;
    }
    .popup span {
      position: absolute;
      top: 10px;
      right: 15px;
      cursor: pointer;
      font-size: 1.5rem;
    }

    @keyframes fadeIn { from {opacity: 0;} to {opacity: 1;} }
    @keyframes zoomIn { from {transform: scale(0.7); opacity: 0;} to {transform: scale(1); opacity: 1;} }

    @media (max-width: 768px) {
      .about-content {
        flex-direction: column;
        text-align: center;
      }
      .gallery img {
        max-width: 90%;
      }
    }
  </style>
</head>

<body>

  <header class="hero">
    <div class="hero-text">
      <h1>Joel Mukwekwe</h1>
      <p>Developer • Designer • Creator</p>
      <a href="resume/JOEL MUKWEKWE.pdf" download>📄 Download Resume</a>
      <button onclick="openPopup()">✉️ Contact Me</button>
    </div>
  </header>

  <section class="section about">
    <h2>About Me</h2>
    <div class="about-content">
      <img src="images/joel.jpg" class="about-img" alt="Joel" />
      <p>Hey there! I'm a passionate web developer skilled in PHP, JavaScript, and creating immersive web experiences with beautiful animations.</p>
    </div>
  </section>

  <section class="section projects">
    <h2>Projects</h2>
    <div class="gallery" id="gallery"></div>
  </section>

  <section class="section blog">
    <h2>Blog</h2>
    <div class="blog-grid" id="blogGrid"></div>
  </section>

  <section class="section glass-section">
    <h2>Tech Stack</h2>
    <div class="container">
      <div class="glass-card"><h3>Frontend</h3><p>HTML, CSS, JavaScript, React</p></div>
      <div class="glass-card"><h3>Backend</h3><p>PHP, Node.js, MySQL</p></div>
      <div class="glass-card"><h3>Design</h3><p>Figma, Adobe XD, Canva</p></div>
    </div>
  </section>

  <!-- Contact Popup -->
  <div id="contactPopup" class="popup">
    <span onclick="closePopup()">✖</span>
    <h3>Contact Me</h3>
    <p>Email: <a href="mailto:joelpeter379@gmail.com">joelm@example.com</a></p>
    <p>Phone: +254 726 468362</p>
  </div>

  <!-- Lightbox -->
  <div class="lightbox-overlay" id="lightboxOverlay">
    <span class="lightbox-close" onclick="closeLightbox()">✖</span>
    <img src="" alt="Project View" />
  </div>

  <script>
    // Lightbox Functions
    const overlay = document.getElementById("lightboxOverlay");
    const lightboxImg = overlay.querySelector("img");

    function showLightbox(src) {
      lightboxImg.src = src;
      overlay.classList.add("active");
    }

    function closeLightbox() {
      overlay.classList.remove("active");
    }

    overlay.addEventListener("click", (e) => {
      if (e.target !== lightboxImg) closeLightbox();
    });

    // Contact popup
    function openPopup() {
      document.getElementById("contactPopup").classList.add("active");
    }
    function closePopup() {
      document.getElementById("contactPopup").classList.remove("active");
    }

    // Dynamic Projects
    const projects = [
      { src: "images/2.png", alt: "Project 1" },
      { src: "images/3.png", alt: "Project 2" },
      { src: "images/4.png", alt: "Project 3" }
    ];
    const gallery = document.getElementById("gallery");
    projects.forEach(p => {
      const img = document.createElement("img");
      img.src = p.src;
      img.alt = p.alt;
      img.onclick = () => showLightbox(p.src);
      gallery.appendChild(img);
    });

    // Dynamic Blogs
    const blogs = [
      { title: "How I Built My First PHP Portfolio", link: "blog/blog1.html", excerpt: "A story about my web development journey..." },
      { title: "Top 5 JavaScript Tips", link: "blog/blog2.html", excerpt: "Boost productivity with these tips..." },
      { title: "Explaining Next.js with TypeScript", link: "blog/blog3.html", excerpt: "What is Next.js and Why Use TypeScript..." }
    ];
    const blogGrid = document.getElementById("blogGrid");
    blogs.forEach(b => {
      const card = document.createElement("div");
      card.className = "blog-card";
      card.innerHTML = `<h3><a href="${b.link}">${b.title}</a></h3><p>${b.excerpt}</p>`;
      blogGrid.appendChild(card);
    });
  </script>
</body>
</html>
