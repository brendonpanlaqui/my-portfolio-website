<section id="projects" class="portfolio-details section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Projects</h2>
    <p>A selection of projects that demonstrate my ability to design, build, and manage real-world systems.</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper parent-project-swiper">

      <script type="application/json" class="swiper-config">
        {
          "loop": false,
          "speed": 800,
          "autoHeight": true,
          "observer": true, 
          "observeParents": true,
          "allowTouchMove": false,
          "preventClicks": false,
          "preventClicksPropagation": false,
          "touchStartPreventDefault": false,
          "effect": "slide",
          "pagination": {
            "el": ".project-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>

      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="row gy-4">

            <div class="col-lg-6" data-aos="fade-right">
              <div class="portfolio-details-media">
                <div class="main-image">
                  <div class="portfolio-details-slider swiper init-swiper" data-aos="zoom-in">
                    <script type="application/json" class="swiper-config">
                      {
                        "loop": true,
                        "speed": 1000,
                        "autoplay": { "delay": 6000 },
                        "slidesPerView": 1,
                        "navigation": {
                          "nextEl": ".swiper-button-next",
                          "prevEl": ".swiper-button-prev"
                        }
                      }
                    </script>

                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="assets/img/projects/horasko/login-hk.png" alt="Work Hours Tracker App" class="img-fluid">
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/projects/horasko/register-hk.png" alt="Work Hours Tracker Dashboard" class="img-fluid">
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/projects/horasko/forgot-hk.png" alt="Offline Sync Feature" class="img-fluid">
                      </div>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  </div>
                </div>

                <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
                  <div class="row g-2 mt-3">
                    <div class="col-3"><img src="assets/img/projects/horasko/dashboard-hk.png" alt="Dashboard Page" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/horasko/login-hk.png" alt="Login Page" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/horasko/register-hk.png" alt="Register Page" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/horasko/forgot-hk.png" alt="Forgot Password Page" class="img-fluid glightbox"></div>
                  </div>
                </div>

                <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
                  <span class="badge bg-dark text-light p-2 m-1">React.js</span>
                  <span class="badge bg-dark text-light p-2 m-1">Vite</span>
                  <span class="badge bg-dark text-light p-2 m-1">Laravel 11</span>
                  <span class="badge bg-dark text-light p-2 m-1">MySQL</span>
                  <span class="badge bg-dark text-light p-2 m-1">REST API</span>
                  <span class="badge bg-dark text-light p-2 m-1">Sanctum Auth</span>
                </div>
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
              <div class="portfolio-details-content d-flex flex-column h-100">

                <div class="project-meta">
                  <div class="badge-wrapper">
                    <span class="project-badge">Full Stack Web App</span>
                  </div>
                  <div class="date-client">
                    <div class="meta-item">
                      <i class="bi bi-calendar-check"></i> <span>2025</span>
                    </div>
                    <div class="meta-item">
                      <i class="bi bi-person-workspace"></i> <span>Personal Project</span>
                    </div>
                  </div>
                </div>

                <h2 class="project-title">HorasKo (Work Hours Tracker)</h2>

                <div class="project-website">
                  <i class="bi bi-globe"></i>
                  <a href="https://work-hours-tracker-rho.vercel.app/" target="_blank" rel="noopener noreferrer">
                    work-hours-tracker-rho.vercel.app
                  </a>
                </div>

                <div class="project-overview">
                  <p class="lead">Keep track of your work time without the hassle.</p>

                  <div class="accordion project-accordion" id="portfolio-details-projectAccordion">

                    <div class="accordion-item" data-aos="fade-up">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-1">
                          <i class="bi bi-clipboard-data me-2"></i> System Overview
                        </button>
                      </h2>
                      <div id="portfolio-details-collapse-1" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                          <p>HorasKo is a web-based application that allows users to log daily work hours, view time records by cutoff periods, and manage their work history through a clean and responsive interface.</p>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-2">
                          <i class="bi bi-exclamation-diamond me-2"></i> Technical Challenge
                        </button>
                      </h2>
                      <div id="portfolio-details-collapse-2" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          <p>Tracking work hours manually often leads to inconsistencies and poor record keeping. The main challenge was designing a web application that provides accurate time logging, efficient data retrieval, and a smooth user experience while maintaining secure API communication.</p>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-3">
                          <i class="bi bi-cpu me-2"></i> The Solution
                        </button>
                      </h2>
                      <div id="portfolio-details-collapse-3" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          <p>I built a React-based frontend that communicates with a Laravel REST API for authentication and backend data management. The system is structured to support cutoff-based summaries, efficient filtering, and future scalability for additional features.</p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="project-features" data-aos="fade-up" data-aos-delay="300">
                  <h3><i class="bi bi-stars"></i> Key Features</h3>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <ul class="feature-list">
                        <li><i class="bi bi-check2-circle"></i> Web-based work hour logging</li>
                        <li><i class="bi bi-check2-circle"></i> Cutoff period summaries</li>
                        <li><i class="bi bi-check2-circle"></i> Search and filtering of logs</li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul class="feature-list">
                        <li><i class="bi bi-check2-circle"></i> Secure authentication system</li>
                        <li><i class="bi bi-check2-circle"></i> RESTful API integration</li>
                        <li><i class="bi bi-check2-circle"></i> Responsive dashboard UI</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="cta-buttons mt-auto d-flex gap-3" data-aos="fade-up" data-aos-delay="400">
                  <a href="https://github.com/brendonpanlaqui/work-hours-tracker" target="_blank" class="btn-view-repo">
                    <i class="bi bi-github"></i> View Repository
                  </a>
                  <button onclick="document.querySelector('.parent-project-swiper').swiper.slideNext()" class="btn-next-project">
                    Next Project <i class="bi bi-arrow-right"></i>
                  </button>
                </div>

              </div>
            </div>

          </div>
        </div>

        <div class="swiper-slide">
          <div class="row gy-4">

            <div class="col-lg-6" data-aos="fade-right">
              <div class="portfolio-details-media">
                <div class="main-image">
                  <div class="portfolio-details-slider swiper init-swiper" data-aos="zoom-in">
                    <script type="application/json" class="swiper-config">
                      {
                        "loop": true,
                        "speed": 1000,
                        "autoplay": { "delay": 6000 },
                        "slidesPerView": 1,
                        "navigation": {
                          "nextEl": ".swiper-button-next",
                          "prevEl": ".swiper-button-prev"
                        }
                      }
                    </script>

                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="assets/img/projects/kpmpngn/home-info-kpmpngn.png" alt="KPMPNGN Home" class="img-fluid">
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/projects/kpmpngn/map-info-kpmpngn.png" alt="KPMPNGN Map" class="img-fluid">
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/projects/kpmpngn/location-info-kpmpngn.png" alt="KPMPNGN Location" class="img-fluid">
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/projects/kpmpngn/food-info-kpmpngn.png" alt="KPMPNGN Food" class="img-fluid">
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/projects/kpmpngn/lodging-info-kpmpngn.png" alt="KPMPNGN Lodging" class="img-fluid">
                      </div>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  </div>
                </div>

                <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
                  <div class="row g-2 mt-3">
                    <div class="col-3"><img src="assets/img/projects/kpmpngn/home-kpmpngn.png" alt="Home Screen" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/kpmpngn/map-kpmpngn.png" alt="Map Screen" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/kpmpngn/route-kpmpngn.png" alt="Route Screen" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/kpmpngn/location-kpmpngn.png" alt="Location Screen" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/kpmpngn/food-kpmpngn.png" alt="Food Screen" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/kpmpngn/lodging-kpmpngn.png" alt="Lodging Screen" class="img-fluid glightbox"></div>
                  </div>
                </div>

                <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
                  <span class="badge bg-dark text-light p-2 m-1">React Native</span>
                  <span class="badge bg-dark text-light p-2 m-1">Expo</span>
                  <span class="badge bg-dark text-light p-2 m-1">TypeScript</span>
                  <span class="badge bg-dark text-light p-2 m-1">Expo Router</span>
                  <span class="badge bg-dark text-light p-2 m-1">REST API</span>
                </div>
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
              <div class="portfolio-details-content d-flex flex-column h-100">

                <div class="project-meta">
                  <div class="badge-wrapper">
                    <span class="project-badge">Mobile Application</span>
                  </div>
                  <div class="date-client">
                    <div class="meta-item">
                      <i class="bi bi-calendar-check"></i> <span>2025</span>
                    </div>
                    <div class="meta-item">
                      <i class="bi bi-person-workspace"></i> <span>Personal Project</span>
                    </div>
                  </div>
                </div>

                <h2 class="project-title">KPMPNGN (Travel Buddy)</h2>

                <div class="project-website">
                  <i class="bi bi-github"></i>
                  <a href="https://github.com/brendonpanlaqui" target="_blank" rel="noopener noreferrer">View on GitHub</a>
                </div>

                <div class="project-overview">
                  <p class="lead">"Your Kapampangan Travel Buddy" — A mobile guide to exploring Pampanga.</p>

                  <div class="accordion project-accordion" id="portfolio-details-projectAccordion2">

                    <div class="accordion-item" data-aos="fade-up">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-2-1">
                          <i class="bi bi-phone me-2"></i> System Overview
                        </button>
                      </h2>
                      <div id="portfolio-details-collapse-2-1" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                          <p>KPMPNGN is a comprehensive mobile application designed to promote local tourism in Pampanga. It features interactive maps, a directory of cities and municipalities, and curated lists of food spots, lodging, and tourist attractions.</p>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-2-2">
                          <i class="bi bi-exclamation-diamond me-2"></i> Technical Challenge
                        </button>
                      </h2>
                      <div id="portfolio-details-collapse-2-2" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          <p>The challenge was organizing vast amounts of location data (Angeles, Apalit, Arayat, etc.) into a user-friendly mobile interface. The goal was to provide tourists with intuitive navigation to diverse categories like food, lodging, and landmarks.</p>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-2-3">
                          <i class="bi bi-cpu me-2"></i> The Solution
                        </button>
                      </h2>
                      <div id="portfolio-details-collapse-2-3" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          <p>I developed the app using React Native and Expo for cross-platform compatibility. It uses Expo Router for seamless screen transitions and custom components for dynamic content like the "Daily Fun Fact" and interactive City Dropdowns.</p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="project-features" data-aos="fade-up" data-aos-delay="300">
                  <h3><i class="bi bi-stars"></i> Key Features</h3>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <ul class="feature-list">
                        <li><i class="bi bi-check2-circle"></i> Interactive Map Navigation</li>
                        <li><i class="bi bi-check2-circle"></i> City & Municipality Directory</li>
                        <li><i class="bi bi-check2-circle"></i> Food & Lodging Recommendations</li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul class="feature-list">
                        <li><i class="bi bi-check2-circle"></i> "Daily Fun Fact" Feature</li>
                        <li><i class="bi bi-check2-circle"></i> Custom Dark Mode UI</li>
                        <li><i class="bi bi-check2-circle"></i> Seamless Stack Navigation</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="cta-buttons mt-auto d-flex gap-3" data-aos="fade-up" data-aos-delay="400">
                  <button onclick="document.querySelector('.parent-project-swiper').swiper.slidePrev()" class="btn-next-project">
                    <i class="bi bi-arrow-left"></i> Previous Project
                  </button>
                  <button onclick="document.querySelector('.parent-project-swiper').swiper.slideNext()" class="btn-next-project">
                    Next Project <i class="bi bi-arrow-right"></i>
                  </button>
                </div>

              </div>
            </div>

          </div>
        </div>

        <div class="swiper-slide">
          <div class="row gy-4">

            <div class="col-lg-6" data-aos="fade-right">
              <div class="portfolio-details-media">
                <div class="main-image">
                  <div class="portfolio-details-slider swiper init-swiper" data-aos="zoom-in">
                    <script type="application/json" class="swiper-config">
                      {
                        "loop": true,
                        "speed": 1000,
                        "autoplay": { "delay": 6000 },
                        "slidesPerView": 1,
                        "navigation": {
                          "nextEl": ".swiper-button-next",
                          "prevEl": ".swiper-button-prev"
                        }
                      }
                    </script>

                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="assets/img/projects/woomera/home-woomera.png" alt="Woomera Dashboard" class="img-fluid">
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/projects/woomera/map-woomera.png" alt="Map Page" class="img-fluid">
                      </div>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  </div>
                </div>

                <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
                  <div class="row g-2 mt-3">
                    <div class="col-3"><img src="assets/img/projects/woomera/admin-woomera.png" alt="Admin Page" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/woomera/risk-woomera.png" alt="Risk Radar Page" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/woomera/risk-map-woomera.png" alt="Risk Map Areas Page" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/woomera/alert-woomera.png" alt="Alert Page" class="img-fluid glightbox"></div>
                  </div>
                </div>

                <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
                  <span class="badge bg-dark text-light p-2 m-1">React</span>
                  <span class="badge bg-dark text-light p-2 m-1">TypeScript</span>
                  <span class="badge bg-dark text-light p-2 m-1">Tailwind CSS</span>
                  <span class="badge bg-dark text-light p-2 m-1">Python (Flask)</span>
                  <span class="badge bg-dark text-light p-2 m-1">Leaflet Maps</span>
                  <span class="badge bg-dark text-light p-2 m-1">Dify AI</span>
                </div>
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
              <div class="portfolio-details-content d-flex flex-column h-100">

                <div class="project-meta">
                  <div class="badge-wrapper">
                    <span class="project-badge">Full Stack Website</span>
                  </div>
                  <div class="date-client">
                    <div class="meta-item">
                      <i class="bi bi-calendar-check"></i> <span>2025</span>
                    </div>
                    <div class="meta-item">
                      <i class="bi bi-trophy-fill"></i> <span>48-Hour Hackathon</span>
                    </div>
                  </div>
                </div>

                <h2 class="project-title">Woomera (Crisis Preparedness)</h2>

                <div class="project-website">
                  <i class="bi bi-github"></i>
                  <a href="https://github.com/brendonpanlaqui/woomera-hackathon-cloudstaff" target="_blank" rel="noopener noreferrer">View on GitHub</a>
                </div>

                <div class="project-overview">
                  <p class="lead">A rapid-response crisis management system designed for Angeles City, built in 48 hours.</p>

                  <div class="accordion project-accordion" id="portfolio-details-projectAccordion5">

                    <div class="accordion-item" data-aos="fade-up">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-5-1">
                          <i class="bi bi-shield-check me-2"></i> System Overview
                        </button>
                      </h2>
                      <div id="portfolio-details-collapse-5-1" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                          <p>Woomera is a "Launchpad for Crisis Preparedness" that integrates real-time weather data, AI analysis, and geolocation to provide actionable insights during emergencies. It features an interactive map for monitoring, rain alerts, and an admin command center for managing alerts.</p>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-5-2">
                          <i class="bi bi-exclamation-diamond me-2"></i> Technical Challenge
                        </button>
                      </h2>
                      <div id="portfolio-details-collapse-5-2" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          <p>The main challenge was building a fully functional, real-time crisis monitor with mapping and AI capabilities within a strict 48-hour deadline. We needed to rapidly integrate disparate technologies (frontend maps, backend alerts, AI logic) into a cohesive and user-friendly dashboard.</p>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-5-3">
                          <i class="bi bi-cpu me-2"></i> The Solution
                        </button>
                      </h2>
                      <div id="portfolio-details-collapse-5-3" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          <p>We leveraged React and Leaflet for a responsive frontend map visualization. The backend was built with Python (Flask) for lightweight alert management, while Dify AI was integrated to interpret complex weather data into simple, actionable risk levels for decision-makers.</p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="project-features" data-aos="fade-up" data-aos-delay="300">
                  <h3><i class="bi bi-stars"></i> Key Features</h3>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <ul class="feature-list">
                        <li><i class="bi bi-check2-circle"></i> Interactive Crisis Map</li>
                        <li><i class="bi bi-check2-circle"></i> Real-time Rain Alerts</li>
                        <li><i class="bi bi-check2-circle"></i> AI-Driven Risk Assessment</li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul class="feature-list">
                        <li><i class="bi bi-check2-circle"></i> Admin Command Center</li>
                        <li><i class="bi bi-check2-circle"></i> Geolocation Tracking</li>
                        <li><i class="bi bi-check2-circle"></i> Rapid Alert System</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="cta-buttons mt-auto d-flex gap-3" data-aos="fade-up" data-aos-delay="400">
                  <button onclick="document.querySelector('.parent-project-swiper').swiper.slidePrev()" class="btn-next-project">
                    <i class="bi bi-arrow-left"></i> Previous Project
                  </button>
                  <button onclick="document.querySelector('.parent-project-swiper').swiper.slideNext()" class="btn-next-project">
                    Next Project <i class="bi bi-arrow-right"></i>
                  </button>
                </div>

              </div>
            </div>

          </div>
        </div>
        
        <div class="swiper-slide">
          <div class="row gy-4">

            <div class="col-lg-6" data-aos="fade-right">
              <div class="portfolio-details-media">
                <div class="main-image">
                  <div class="portfolio-details-slider swiper init-swiper" data-aos="zoom-in">
                    <script type="application/json" class="swiper-config">
                      {
                        "loop": true,
                        "speed": 1000,
                        "autoplay": { "delay": 6000 },
                        "slidesPerView": 1,
                        "navigation": {
                          "nextEl": ".swiper-button-next",
                          "prevEl": ".swiper-button-prev"
                        }
                      }
                    </script>

                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="assets/img/projects/egnosis/login-egnosis.png" alt="Egnosis Dashboard" class="img-fluid">
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/projects/egnosis/register-egnosis.png" alt="Egnosis Records" class="img-fluid">
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/projects/egnosis/forgot-egnosis.png" alt="Egnosis Interface" class="img-fluid">
                      </div>
                      <div class="swiper-slide">
                        <img src="assets/img/projects/egnosis/profile-egnosis.png" alt="Egnosis Interface" class="img-fluid">
                      </div>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  </div>
                </div>

                <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
                  <div class="row g-2 mt-3">
                    <div class="col-3"><img src="assets/img/projects/egnosis/catalog-egnosis.png" alt="Thumb 1" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/egnosis/book-egnosis.png" alt="Thumb 2" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/egnosis/borrow-egnosis.png" alt="Thumb 3" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/egnosis/reserve-egnosis.png" alt="Thumb 4" class="img-fluid glightbox"></div>
                  </div>
                </div>

                <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
                  <span class="badge bg-dark text-light p-2 m-1">Java</span>
                  <span class="badge bg-dark text-light p-2 m-1">Gradle</span>
                  <span class="badge bg-dark text-light p-2 m-1">Firebase</span>
                  <span class="badge bg-dark text-light p-2 m-1">Mobile App</span>
                </div>
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
              <div class="portfolio-details-content d-flex flex-column h-100">

                <div class="project-meta">
                  <div class="badge-wrapper">
                    <span class="project-badge">Mobile Application</span>
                  </div>
                  <div class="date-client">
                    <div class="meta-item">
                      <i class="bi bi-calendar-check"></i> <span>2024</span>
                    </div>
                    <div class="meta-item">
                      <i class="bi bi-people-fill"></i> <span>Collaborative Project</span>
                    </div>
                  </div>
                </div>

                <h2 class="project-title">Egnosis (Library Information System)</h2>

                <div class="project-website">
                  <i class="bi bi-github"></i>
                  <a href="https://github.com/brendonpanlaqui" target="_blank" rel="noopener noreferrer">View on GitHub</a>
                </div>

                <div class="project-overview">
                  <p class="lead">A Java-based mobile application for managing library information and student records.</p>

                  <div class="accordion project-accordion" id="portfolio-details-projectAccordion4">

                    <div class="accordion-item" data-aos="fade-up">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-4-1">
                          <i class="bi bi-journal-bookmark me-2"></i> System Overview
                        </button>
                      </h2>
                      <div id="portfolio-details-collapse-4-1" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                          <p>Egnosis is a Library Information Management System designed to streamline administrative tasks. It manages student records through core CRUD functionalities and maintains a structured, real-time connection to a cloud database.</p>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-4-2">
                          <i class="bi bi-exclamation-diamond me-2"></i> Technical Challenge
                        </button>
                      </h2>
                      <div id="portfolio-details-collapse-4-2" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          <p>The primary challenge was ensuring reliable data synchronization between a local desktop client and a cloud-based backend. Additionally, implementing efficient dependency management and build automation was crucial for the collaborative development process.</p>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-4-3">
                          <i class="bi bi-cpu me-2"></i> The Solution
                        </button>
                      </h2>
                      <div id="portfolio-details-collapse-4-3" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          <p>We developed the application using Java, applying object-oriented design principles for a modular architecture. We utilized Gradle for consistent build automation and integrated Firebase to handle structured data storage and real-time updates for student records.</p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="project-features" data-aos="fade-up" data-aos-delay="300">
                  <h3><i class="bi bi-stars"></i> Key Features</h3>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <ul class="feature-list">
                        <li><i class="bi bi-check2-circle"></i> Student Record Management</li>
                        <li><i class="bi bi-check2-circle"></i> Real-time Firebase Database</li>
                        <li><i class="bi bi-check2-circle"></i> Gradle Build Automation</li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul class="feature-list">
                        <li><i class="bi bi-check2-circle"></i> Object-Oriented Architecture</li>
                        <li><i class="bi bi-check2-circle"></i> CRUD Functionalities</li>
                        <li><i class="bi bi-check2-circle"></i> User-Friendly UI</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="cta-buttons mt-auto d-flex gap-3" data-aos="fade-up" data-aos-delay="400">
                  <button onclick="document.querySelector('.parent-project-swiper').swiper.slidePrev()" class="btn-next-project">
                    <i class="bi bi-arrow-left"></i> Previous Project
                  </button>
                  <button onclick="document.querySelector('.parent-project-swiper').swiper.slideNext()" class="btn-next-project">
                    Next Project <i class="bi bi-arrow-right"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="row gy-4">

            <div class="col-lg-6" data-aos="fade-right">
              <div class="portfolio-details-media">
                <div class="main-image">
                  <div class="portfolio-details-slider swiper init-swiper" data-aos="zoom-in">
                    <script type="application/json" class="swiper-config">
                      { "loop": true, "speed": 1000, "autoplay": { "delay": 6000 }, "slidesPerView": 1, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" } }
                    </script>
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="assets/img/projects/questhunt/login-qh.png" alt="Quest Hunt Login" class="img-fluid"></div>
                      <div class="swiper-slide"><img src="assets/img/projects/questhunt/register-qh.png" alt="Quest Hunt Register" class="img-fluid"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  </div>
                </div>

                <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
                  <div class="row g-2 mt-3">
                    <div class="col-3"><img src="assets/img/projects/questhunt/landing-qh.png" alt="Landing Page" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/questhunt/employee-qh.png" alt="Employee Page" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/questhunt/employer-qh.png" alt="Employer Page" class="img-fluid glightbox"></div>
                    <div class="col-3"><img src="assets/img/projects/questhunt/admin-qh.png" alt="Admin Page" class="img-fluid glightbox"></div>
                  </div>
                </div>

                <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
                  <span class="badge bg-dark text-light p-2 m-1">Native PHP</span>
                  <span class="badge bg-dark text-light p-2 m-1">MySQL</span>
                  <span class="badge bg-dark text-light p-2 m-1">Bootstrap 5</span>
                  <span class="badge bg-dark text-light p-2 m-1">JavaScript</span>
                  <span class="badge bg-dark text-light p-2 m-1">Custom MVC</span>
                </div>
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
              <div class="portfolio-details-content d-flex flex-column h-100">
                <div class="project-meta">
                  <div class="badge-wrapper"><span class="project-badge">Full Stack Web App</span></div>
                  <div class="date-client">
                    <div class="meta-item"><i class="bi bi-calendar-check"></i> <span>2024</span></div>
                    <div class="meta-item"><i class="bi bi-person-workspace"></i> <span>Personal Project</span></div>
                  </div>
                </div>

                <h2 class="project-title">Quest Hunt (Local Freelancing)</h2>
                <div class="project-website">
                  <i class="bi bi-github"></i>
                  <a href="https://github.com/brendonpanlaqui" target="_blank">View on GitHub</a>
                </div>

                <div class="project-overview">
                  <p class="lead">A community-driven marketplace connecting employers with skilled freelancers in Angeles City.</p>
                  <div class="accordion project-accordion" id="accordionQuestHunt">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQuestHunt1">
                          <i class="bi bi-laptop me-2"></i> System Overview
                        </button>
                      </h2>
                      <div id="collapseQuestHunt1" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                          <p>Quest Hunt is a local employment platform designed for Angeles City. It bridges the gap between clients needing quick tasks or projects done and skilled "taskers" looking for online or on-site work opportunities.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQuestHunt2">
                          <i class="bi bi-exclamation-diamond me-2"></i> Technical Challenge
                        </button>
                      </h2>
                      <div id="collapseQuestHunt2" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          <p>The challenge was building a secure, role-based architecture from scratch without a framework. I needed to manually implement session management, input sanitization, and complex SQL relationships to handle job applications and user roles securely.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQuestHunt3">
                          <i class="bi bi-cpu me-2"></i> The Solution
                        </button>
                      </h2>
                      <div id="collapseQuestHunt3" class="accordion-collapse collapse">
                        <div class="accordion-body">
                          <p>I engineered a custom MVC structure using native PHP and MySQL. The system features distinct dashboards for Employers, Workers, and Admins, with secure login controllers and dynamic views powered by Bootstrap 5.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="project-features mt-4">
                  <h3><i class="bi bi-stars"></i> Key Features</h3>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <ul class="feature-list">
                        <li><i class="bi bi-check2-circle"></i> 3-Role System (Admin/User)</li>
                        <li><i class="bi bi-check2-circle"></i> Local Job Posting</li>
                        <li><i class="bi bi-check2-circle"></i> Application Tracking</li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul class="feature-list">
                        <li><i class="bi bi-check2-circle"></i> User Reporting System</li>
                        <li><i class="bi bi-check2-circle"></i> Profile Management</li>
                        <li><i class="bi bi-check2-circle"></i> Secure Session Auth</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="cta-buttons mt-auto d-flex gap-3 pt-4">
                  <button onclick="document.querySelector('.parent-project-swiper').swiper.slidePrev()" class="btn-next-project">
                    <i class="bi bi-arrow-left"></i> Previous Project
                  </button>
                  <button onclick="document.querySelector('.parent-project-swiper').swiper.slideTo(0)" class="btn-next-project">
                    Back to Start <i class="bi bi-arrow-counterclockwise"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>