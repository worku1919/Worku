<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worku Fikadu - Full Stack Web Developer</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-brand">
                <img src="Image/photo_2026-01-28_21-28-26.jpg" alt="Worku Fikadu Logo" class="logo">
                <span class="brand-text">Worku Fikadu</span>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.html" class="nav-link active" data-translate="home">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link" data-translate="about">About Me</a>
                </li>
                <li class="nav-item">
                    <a href="services.html" class="nav-link" data-translate="services">My Services</a>
                </li>
                <li class="nav-item">
                    <a href="weborder.html" class="nav-link" data-translate="weborder">Web Order</a>
                </li>
                <li class="nav-item">
                    <a href="contact.html" class="nav-link" data-translate="contact">Contact Me</a>
                </li>
                <li class="nav-item">
                    <a href="auth.html" class="nav-link" data-translate="auth">Register</a>
                </li>
                <li class="nav-item">
                    <a href="chatbot.html" class="nav-link" data-translate="chatbot">Chatbot</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="language-dropdown">
                        <i class="fas fa-globe"></i> <span data-translate="language">Language</span>
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item language-option" data-lang="en">English</a>
                        <a href="#" class="dropdown-item language-option" data-lang="am">አማርኛ (Amharic)</a>
                        <a href="#" class="dropdown-item language-option" data-lang="ao">Afaan Oromoo</a>
                    </div>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">
                        <span data-translate="greeting">Hello, I'm</span> 
                        <span class="highlight">Worku Fikadu</span>
                    </h1>
                    <h2 class="hero-subtitle" data-translate="title">Computer Science Student & Full-Stack Web Developer</h2>
                    <p class="hero-description" data-translate="hero-description">
                        Transforming Ethiopia's digital landscape through innovative web solutions and cutting-edge technology.
                    </p>
                    <div class="hero-buttons">
                        <a href="services.html" class="btn btn-primary" data-translate="view-services">View My Services</a>
                        <a href="contact.html" class="btn btn-outline" data-translate="contact-me">Contact Me</a>
                    </div>
                    <div class="hero-social">
                        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="images/profile.jpg" alt="Worku Fikadu" class="profile-img">
                    <div class="floating-elements">
                        <div class="floating-element" data-aos="fade-up" data-aos-delay="100">
                            <i class="fab fa-html5"></i>
                        </div>
                        <div class="floating-element" data-aos="fade-up" data-aos-delay="200">
                            <i class="fab fa-css3-alt"></i>
                        </div>
                        <div class="floating-element" data-aos="fade-up" data-aos-delay="300">
                            <i class="fab fa-js"></i>
                        </div>
                        <div class="floating-element" data-aos="fade-up" data-aos-delay="400">
                            <i class="fab fa-react"></i>
                        </div>
                        <div class="floating-element" data-aos="fade-up" data-aos-delay="500">
                            <i class="fab fa-node-js"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="skills">
        <div class="container">
            <h2 class="section-title" data-translate="skills-title">Technical Skills</h2>
            <div class="skills-grid">
                <div class="skill-card" data-aos="fade-up">
                    <div class="skill-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="skill-title" data-translate="frontend">Frontend Development</h3>
                    <ul class="skill-list">
                        <li>HTML5, CSS3, JavaScript (ES6+)</li>
                        <li>React.js</li>
                        <li>Bootstrap</li>
                    </ul>
                </div>
                <div class="skill-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="skill-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3 class="skill-title" data-translate="backend">Backend Development</h3>
                    <ul class="skill-list">
                        <li>Node.js, Express.js</li>
                        <li>PHP</li>
                    </ul>
                </div>
                <div class="skill-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="skill-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="skill-title" data-translate="database">Databases</h3>
                    <ul class="skill-list">
                        <li>MySQL, PostgreSQL</li>
                        <li>MongoDB</li>
                    </ul>
                </div>
                <div class="skill-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="skill-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="skill-title" data-translate="devops">DevOps & Deployment</h3>
                    <ul class="skill-list">
                        <li>Git, GitHub</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Preview -->
    <section class="projects-preview">
        <div class="container">
            <h2 class="section-title" data-translate="recent-projects">Recent Projects</h2>
            <div class="projects-grid">
                <div class="project-card" data-aos="fade-up">
                    <div class="project-image">
                        <img src="images/project1.jpg" alt="E-commerce Platform">
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">E-commerce Platform</h3>
                        <p class="project-description">A fully functional e-commerce platform with payment integration.</p>
                        <div class="project-tags">
                            <span class="tag">React</span>
                            <span class="tag">Node.js</span>
                            <span class="tag">MongoDB</span>
                        </div>
                    </div>
                </div>
                <div class="project-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="project-image">
                        <img src="images/project2.jpg" alt="Business Website">
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Corporate Website</h3>
                        <p class="project-description">Professional website for a business with CMS capabilities.</p>
                        <div class="project-tags">
                            <span class="tag">HTML5</span>
                            <span class="tag">CSS3</span>
                            <span class="tag">JavaScript</span>
                        </div>
                    </div>
                </div>
                <div class="project-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="project-image">
                        <img src="images/project3.jpg" alt="Blog Platform">
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Blog Platform</h3>
                        <p class="project-description">Content management system for bloggers with rich features.</p>
                        <div class="project-tags">
                            <span class="tag">PHP</span>
                            <span class="tag">MySQL</span>
                            <span class="tag">Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="services.html" class="btn btn-primary" data-translate="view-all-projects">View All Projects</a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title" data-translate="testimonials">Client Testimonials</h2>
            <div class="testimonials-slider">
                <div class="testimonial-card active">
                    <div class="testimonial-content">
                        <p class="testimonial-text">"Worku delivered an exceptional e-commerce platform that exceeded our expectations. His attention to detail and technical expertise are outstanding."</p>
                        <div class="testimonial-author">
                            <img src="images/client1.jpg" alt="Client" class="client-image">
                            <div class="client-info">
                                <h4 class="client-name">Abel Tekle</h4>
                                <p class="client-position">CEO, EthioMarket</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p class="testimonial-text">"Working with Worku was a great experience. He understood our requirements perfectly and delivered a professional website on time."</p>
                        <div class="testimonial-author">
                            <img src="images/client2.jpg" alt="Client" class="client-image">
                            <div class="client-info">
                                <h4 class="client-name">Sara Ahmed</h4>
                                <p class="client-position">Marketing Director, AddisBiz</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p class="testimonial-text">"Worku's technical skills and problem-solving abilities are impressive. He created a custom solution that perfectly fits our business needs."</p>
                        <div class="testimonial-author">
                            <img src="images/client3.jpg" alt="Client" class="client-image">
                            <div class="client-info">
                                <h4 class="client-name">Michael Bekele</h4>
                                <p class="client-position">Founder, Oromia Tech</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-dots">
                <span class="dot active" data-slide="0"></span>
                <span class="dot" data-slide="1"></span>
                <span class="dot" data-slide="2"></span>
            </div>
        </div>
    </section>
<?php
// Include the project model
require_once 'models/Project.php';

// Get all projects and categories
 $projects = Project::getAll();
 $categories = Project::getCategories();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio | John Doe</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --dark-color: #343a40;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, #0056b3 100%);
            color: white;
            padding: 100px 0;
            margin-bottom: 50px;
        }
        
        .project-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .project-card img {
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .project-card:hover img {
            transform: scale(1.05);
        }
        
        .category-badge {
            font-size: 0.8rem;
            padding: 0.25rem 0.5rem;
        }
        
        .tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 0.25rem;
        }
        
        .tech-badge {
            background-color: #e9ecef;
            color: #495057;
            font-size: 0.75rem;
            padding: 0.2rem 0.4rem;
            border-radius: 0.25rem;
        }
        
        .section-title {
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 40px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background-color: var(--primary-color);
        }
        
        .contact-section {
            background-color: var(--light-color);
            padding: 80px 0;
        }
        
        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            background-color: var(--dark-color);
            color: white;
            margin: 0 5px;
            transition: background-color 0.3s ease;
        }
        
        .social-links a:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .filter-btn {
            margin: 0 5px 10px;
            border-radius: 25px;
            padding: 8px 20px;
            border: 2px solid var(--primary-color);
            background-color: transparent;
            color: var(--primary-color);
            transition: all 0.3s ease;
        }
        
        .filter-btn:hover, .filter-btn.active {
            background-color: var(--primary-color);
            color: white;
        }
        
        #successAlert, #errorAlert {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
            min-width: 300px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">John Doe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">Hi, I'm John Doe</h1>
            <p class="lead mb-4">Full Stack Developer | UI/UX Designer</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fas fa-envelope"></i></a>
            </div>
            <a href="#projects" class="btn btn-light btn-lg mt-4">View My Work</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="section-title text-center">About Me</h2>
            <div class="row">
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/500x400" alt="About Me" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h3>Building Digital Experiences</h3>
                    <p>I'm a passionate full-stack developer with 5+ years of experience creating web applications that solve real-world problems. I specialize in modern JavaScript frameworks and have a strong background in UI/UX design.</p>
                    <p>When I'm not coding, you can find me exploring new technologies, contributing to open-source projects, or sharing my knowledge through technical writing.</p>
                    <div class="row mt-4">
                        <div class="col-6">
                            <h5>Frontend:</h5>
                            <p>React, Vue.js, HTML5, CSS3, JavaScript</p>
                        </div>
                        <div class="col-6">
                            <h5>Backend:</h5>
                            <p>Node.js, PHP, Python, MySQL, MongoDB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-5">
        <div class="container">
            <h2 class="section-title text-center">My Projects</h2>
            
            <!-- Filter Buttons -->
            <div class="text-center mb-5">
                <button class="filter-btn active" data-category="all">All Projects</button>
                <?php foreach ($categories as $category): ?>
                    <button class="filter-btn" data-category="<?php echo htmlspecialchars($category['slug']); ?>">
                        <?php echo htmlspecialchars($category['name']); ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <!-- Projects Grid -->
            <div class="row" id="projectsContainer">
                <!-- Projects will be loaded here by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title text-center">Get In Touch</h2>
            <div class="row">
                <div class="col-lg-6">
                    <h3>Let's Work Together</h3>
                    <p>I'm always interested in hearing about new projects and opportunities. Whether you have a question or just want to say hi, feel free to reach out!</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-envelope me-2"></i> john.doe@example.com</li>
                        <li><i class="fas fa-phone me-2"></i> +1 (555) 123-4567</li>
                        <li><i class="fas fa-map-marker-alt me-2"></i> San Francisco, CA</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <form id="contactForm">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="message" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <span class="spinner-border spinner-border-sm d-none" role="status"></span>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2023 John Doe. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Success/Error Alerts -->
    <div id="successAlert" class="alert alert-success" role="alert">
        <strong>Success!</strong> Your message has been sent.
    </div>
    <div id="errorAlert" class="alert alert-danger" role="alert">
        <strong>Error!</strong> <span id="errorMessage"></span>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const projectsContainer = document.getElementById('projectsContainer');
            const contactForm = document.getElementById('contactForm');
            const filterButtons = document.querySelectorAll('.filter-btn');
            let allProjects = [];

            // Load projects from API
            async function loadProjects() {
                try {
                    const response = await fetch('api/projects.php');
                    const data = await response.json();
                    
                    if (data.success) {
                        allProjects = data.data;
                        displayProjects(allProjects);
                    }
                } catch (error) {
                    console.error('Error loading projects:', error);
                    projectsContainer.innerHTML = '<p class="text-center">Error loading projects.</p>';
                }
            }

            // Display projects
            function displayProjects(projects) {
                projectsContainer.innerHTML = '';
                
                if (projects.length === 0) {
                    projectsContainer.innerHTML = '<p class="text-center">No projects found.</p>';
                    return;
                }

                projects.forEach(project => {
                    const projectCard = `
                        <div class="col-lg-4 col-md-6 project-item" data-category="${project.category_slug || 'all'}">
                            <div class="card project-card h-100">
                                <img src="${project.image_url || 'https://via.placeholder.com/400x300'}" class="card-img-top" alt="${project.title}">
                                <div class="card-body">
                                    <h5 class="card-title">${project.title}</h5>
                                    <p class="card-text">${project.description.substring(0, 100)}...</p>
                                    <div class="tech-stack mb-3">
                                        <span class="tech-badge">PHP</span>
                                        <span class="tech-badge">MySQL</span>
                                        <span class="tech-badge">JavaScript</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a href="${project.live_url || '#'}" class="btn btn-sm btn-outline-primary" target="_blank">
                                            <i class="fas fa-external-link-alt"></i> Live
                                        </a>
                                        <a href="${project.github_url || '#'}" class="btn btn-sm btn-outline-dark" target="_blank">
                                            <i class="fab fa-github"></i> Code
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    projectsContainer.innerHTML += projectCard;
                });
            }

            // Filter projects
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    const category = this.dataset.category;
                    const filteredProjects = category === 'all' 
                        ? allProjects 
                        : allProjects.filter(p => p.category_slug === category);
                    
                    displayProjects(filteredProjects);
                });
            });

            // Handle contact form submission
            contactForm.addEventListener('submit', async function(e) {
                e.preventDefault();
                
                const formData = {
                    name: document.getElementById('name').value,
                    email: document.getElementById('email').value,
                    subject: document.getElementById('subject').value,
                    message: document.getElementById('message').value
                };
                
                const submitBtn = e.target.querySelector('button[type="submit"]');
                const spinner = submitBtn.querySelector('.spinner-border');
                
                spinner.classList.remove('d-none');
                submitBtn.disabled = true;
                
                try {
                    const response = await fetch('api/contact.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(formData)
                    });
                    
                    const data = await response.json();
                    
                    if (data.success) {
                        document.getElementById('successAlert').style.display = 'block';
                        document.getElementById('errorAlert').style.display = 'none';
                        e.target.reset();
                        
                        setTimeout(() => {
                            document.getElementById('successAlert').style.display = 'none';
                        }, 5000);
                    } else {
                        throw new Error(data.error || 'Failed to send message');
                    }
                } catch (error) {
                    document.getElementById('errorMessage').textContent = error.message;
                    document.getElementById('errorAlert').style.display = 'block';
                    document.getElementById('successAlert').style.display = 'none';
                } finally {
                    spinner.classList.add('d-none');
                    submitBtn.disabled = false;
                }
            });

            // Load projects on page load
            loadProjects();
        });
    </script>
</body>
</html>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="images/logo.png" alt="Worku Fikadu Logo" class="logo">
                    <h3>Worku Fikadu</h3>
                    <p data-translate="footer-text">Transforming Ethiopia's digital future through innovative web solutions.</p>
                </div>
                <div class="footer-links">
                    <h4 data-translate="quick-links">Quick Links</h4>
                    <ul>
                        <li><a href="about.html" data-translate="about">About Me</a></li>
                        <li><a href="services.html" data-translate="services">My Services</a></li>
                        <li><a href="weborder.html" data-translate="weborder">Web Order</a></li>
                        <li><a href="contact.html" data-translate="contact">Contact Me</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4 data-translate="contact-info">Contact Info</h4>
                    <p><i class="fas fa-envelope"></i> workufikadu643@gmail.com</p>
                    <p><i class="fas fa-phone"></i> +251 919639519</p>
                    <p><i class="fas fa-map-marker-alt"></i> Jimma, Ethiopia</p>
                </div>
                <div class="footer-social">
                    <h4 data-translate="follow-me">Follow Me</h4>
                    <div class="social-links">
                        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Worku Fikadu. <span data-translate="rights">All Rights Reserved.</span></p>
            </div>
        </div>
    </footer>

    <script>
        <script>
     document.addEventListener('DOMContentLoaded', function() {
    const projectsContainer = document.getElementById('projectsContainer');
    const contactForm = document.getElementById('contactForm');
    const filterButtons = document.querySelectorAll('.filter-btn');
    let allProjects = [];
    let allCategories = [];

    // --- Load projects and categories from API ---
    async function loadData() {
        try {
            // Load Projects
            const projectsResponse = await fetch('api/projects.php');
            if (!projectsResponse.ok) {
                throw new Error(`HTTP error! Status: ${projectsResponse.status}`);
            }
            const projectsData = await projectsResponse.json();
            
            if (projectsData.success) {
                allProjects = projectsData.data;
            } else {
                throw new Error(projectsData.error || 'Failed to load projects');
            }

            // Load Categories (assuming you have an endpoint for this)
            const categoriesResponse = await fetch('api/categories.php');
            if (categoriesResponse.ok) {
                const categoriesData = await categoriesResponse.json();
                if (categoriesData.success) {
                    allCategories = categoriesData.data;
                    createFilterButtons();
                }
            }

            displayProjects(allProjects);

        } catch (error) {
            console.error('Error loading data:', error);
            projectsContainer.innerHTML = `<p class="text-center text-danger">Error loading projects: ${error.message}</p>`;
        }
    }

    // --- Create filter buttons dynamically ---
    function createFilterButtons() {
        const filterContainer = document.querySelector('.text-center.mb-5');
        filterContainer.innerHTML = '<button class="filter-btn active" data-category="all">All Projects</button>';
        
        allCategories.forEach(category => {
            const button = document.createElement('button');
            button.className = 'filter-btn';
            button.dataset.category = category.slug;
            button.textContent = category.name;
            filterContainer.appendChild(button);
        });
        
        // Re-attach event listeners to new buttons
        attachFilterListeners();
    }

    // --- Display projects on the page ---
    function displayProjects(projects) {
        projectsContainer.innerHTML = '';
        
        if (!projects || projects.length === 0) {
            projectsContainer.innerHTML = '<p class="text-center">No projects found.</p>';
            return;
        }

        projects.forEach(project => {
            const projectCard = `
                <div class="col-lg-4 col-md-6 project-item" data-category="${project.category_slug || 'all'}">
                    <div class="card project-card h-100">
                        <img src="${project.image_url || 'https://via.placeholder.com/400x300'}" class="card-img-top" alt="${project.title}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">${project.title}</h5>
                            <p class="card-text">${project.description.substring(0, 100)}...</p>
                            <div class="tech-stack mt-auto">
                                <span class="tech-badge">PHP</span>
                                <span class="tech-badge">MySQL</span>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="${project.live_url || '#'}" class="btn btn-sm btn-outline-primary" target="_blank">
                                    <i class="fas fa-external-link-alt"></i> Live
                                </a>
                                <a href="${project.github_url || '#'}" class="btn btn-sm btn-outline-dark" target="_blank">
                                    <i class="fab fa-github"></i> Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            projectsContainer.innerHTML += projectCard;
        });
    }

    // --- Attach event listeners for filtering ---
    function attachFilterListeners() {
        const newFilterButtons = document.querySelectorAll('.filter-btn');
        newFilterButtons.forEach(button => {
            button.addEventListener('click', function() {
                newFilterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                const category = this.dataset.category;
                const filteredProjects = category === 'all' 
                    ? allProjects 
                    : allProjects.filter(p => (p.category_slug || 'all') === category);
                
                displayProjects(filteredProjects);
            });
        });
    }

    // --- Handle contact form submission ---
    contactForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const formData = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            subject: document.getElementById('subject').value,
            message: document.getElementById('message').value
        };
        
        const submitBtn = e.target.querySelector('button[type="submit"]');
        const spinner = submitBtn.querySelector('.spinner-border');
        
        spinner.classList.remove('d-none');
        submitBtn.disabled = true;
        
        try {
            const response = await fetch('api/contact.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(formData)
            });
            
            const data = await response.json();
            
            if (data.success) {
                showAlert('successAlert', 'Your message has been sent successfully!');
                e.target.reset();
            } else {
                showAlert('errorAlert', data.error || 'Failed to send message.');
            }
        } catch (error) {
            showAlert('errorAlert', `Network error: ${error.message}`);
        } finally {
            spinner.classList.add('d-none');
            submitBtn.disabled = false;
        }
    });

    // --- Helper to show alerts ---
    function showAlert(alertId, message) {
        const alertEl = document.getElementById(alertId);
        if (alertId === 'errorAlert') {
            alertEl.querySelector('span').textContent = message;
        }
        alertEl.style.display = 'block';
        setTimeout(() => { alertEl.style.display = 'none'; }, 5000);
    }

    // --- Initial load ---
    loadData();
});
</script>
