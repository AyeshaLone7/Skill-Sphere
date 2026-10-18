<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillSphere - Learn & Grow</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    
     <link rel="stylesheet" href="{{ asset('css/course.css') }}"> 
</head>

<body>
<div class="gap40"></div>


    <nav>
        <h2>SkillSphere.</h2>
        <h3>Get Skilled Today!</h3>
    </nav>
<div class="gap40"></div>
<div class="gap40"></div>
<div class="gap40"></div>

    <section class="hero">
        <h1>Learn Today,<br><span>Lead Tomorrow.</span></h1>
        <p>Discover world-class skills and master them at your own flexible pace.</p>
        <!-- Explore Courses button pointing to the form section -->
        <a href="#courses">
            <button>Explore Courses</button>
        </a>
    </section>

    <section class="courses" id="courses">
        <h2>Popular Courses</h2>

        <div class="course-list">
            <div class="course">
                <div>
                    <h3>🌐 Web Development</h3>
                    <p>Learn HTML, CSS, JavaScript and build modern web apps.</p>
                </div>
                <a href="#join">Select Course →</a>
            </div>

            <div class="course">
                <div>
                    <h3>🐍 Python Programming</h3>
                    <p>Start your programming journey with clean code.</p>
                </div>
                <a href="#join">Select Course →</a>
            </div>

            <div class="course">
                <div>
                    <h3>🔒 Cyber Security</h3>
                    <p>Dive deep into ethical hacking and defense.</p>
                </div>
                <a href="#join">Select Course →</a>
            </div>

            <div class="course">
                <div>
                    <h3>🤖 Artificial Intelligence</h3>
                    <p>Explore AI models, prompts and modern tech.</p>
                </div>
                <a href="#join">Select Course →</a>
            </div>

            <div class="course">
                <div>
                    <h3>🎨 Canva Designing</h3>
                    <p>Craft stunning graphics and professional branding.</p>
                </div>
                <a href="#join">Select Course →</a>
            </div>

            <div class="course">
                <div>
                    <h3>🎬 Video Editing</h3>
                    <p>Master modern cuts, transitions and color grading.</p>
                </div>
                <a href="#join">Select Course →</a>
            </div>

            <div class="course">
                <div>
                    <h3>🛒 E-Commerce</h3>
                    <p>Scale digital stores and boost online sales.</p>
                </div>
                <a href="#join">Select Course →</a>
            </div>

            <div class="course">
                <div>
                    <h3>☁️ Cloud Computing</h3>
                    <p>Deploy scalable cloud services securely.</p>
                </div>
                <a href="#join">Select Course →</a>
            </div>
        </div>
    </section>

    <!-- Registration Section with id="join" -->
    <section id="join" class="register-section">
        <div class="form-card">
            <h2>Join SkillSphere</h2>
            <p>Register now and kickstart your learning journey</p>

            @if (session('success'))
                <div class="success-alert">
                    <span>🎉</span> {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <label>Full Name</label>
                <input type="text" placeholder="Enter your full name" required name="name">

                <label>Email Address</label>
                <input type="email" placeholder="Enter your email address" required name="email">

                <label>Education Level</label>
                <select required name="education_level">
                    <option value="">Choose education level</option>
                    <option>School Student</option>
                    <option>College Student</option>
                    <option>University Student</option>
                    <option>Graduate</option>
                    <option>Other</option>
                </select>

                <label>Select Course</label>
                <select required name="course">
                    <option value="">Choose a course</option>
                    <option>Web Development</option>
                    <option>Python Programming</option>
                    <option>Artificial Intelligence</option>
                    <option>Cyber Security</option>
                    <option>Canva Designing</option>
                    <option>Video Editing</option>
                    <option>E-Commerce</option>
                    <option>Cloud Computing</option>
                </select>

                <button type="submit">
                    Register Now
                </button>
            </form>
        </div>
    </section>

</body>
</html>