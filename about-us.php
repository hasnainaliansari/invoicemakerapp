<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us | InvoiceMaker by PayLync</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
    <meta content="" name="description">
    <meta content="" content="website">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="" rel="canonical">
    <link href="css/main-core1.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/home-style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/about.css" type="text/css">
    <link rel="preload" href="/font/static/Inter_18pt-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="/font/InstrumentSerif-Regular.ttf" as="font" type="font/ttf" crossorigin>
</head>

<body class="landing-body" data-new-gr-c-s-check-loaded="14.1266.0" data-gr-ext-installed="" cz-shortcut-listen="true">
    <?php include("includes/header.php"); ?>
    <div class="w-layout-blockcontainer container w-container">


        <section class="hero">
            <div class="container">
                <h1>About Us</h1>



                <p>
                    At PayLync, we’re passionate about simplifying the invoicing and payment process for small business owners, freelancers, and service professionals. We understand that managing invoices, payments, and client relationships can be time-consuming and stressful — and that's why we created Invoice Maker by PayLync.
                </p>

                <div style="display: flex; gap: 16px; justify-content: center;">
                    <a href="#" class="btn btn-primary">Start Free Trial</a>
                    <a href="#" class="btn btn-outline">Talk to Sales</a>
                </div>
            </div>
        </section>

        <!-- COUNTERS SECTION -->
        <section class="hero-counters">
            <div class="container counters-grid">
                <div class="counter-box">
                    <h3 data-target="1000000">0M+</h3>
                    <p>Invoices Generated</p>
                </div>
                <div class="counter-box">
                    <h3 data-target="30000">0K+</h3>
                    <p>Active Businesses</p>
                </div>
                <div class="counter-box">
                    <h3 data-target="50">0+</h3>
                    <p>Payment Integrations</p>
                </div>
                <div class="counter-box">
                    <h3 data-target="5">0</h3>
                    <p>Years of Reliability</p>
                </div>
                <div class="counter-box">
                    <h3 data-target="100">0%</h3>
                    <p>Secure Transactions</p>
                </div>
            </div>
        </section>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const counters = document.querySelectorAll(".counter-box h3");

                const animateCounter = (counter) => {
                    const target = +counter.getAttribute("data-target");
                    const originalText = counter.innerText;

                    // Detect suffix
                    let suffix = "";
                    if (originalText.includes("M")) suffix = "M+";
                    else if (originalText.includes("K")) suffix = "K+";
                    else if (originalText.includes("%")) suffix = "%";
                    else if (originalText.includes("+")) suffix = "+";

                    let count = 0;
                    const speed = 200;

                    const update = () => {
                        const increment = Math.ceil(target / speed);
                        count += increment;

                        if (count < target) {
                            counter.innerText = format(count) + suffix;
                            requestAnimationFrame(update);
                        } else {
                            counter.innerText = format(target) + suffix;
                        }
                    };

                    update();
                };

                const format = (num) => {
                    if (num >= 1000000) return Math.floor(num / 1000000);
                    if (num >= 1000) return Math.floor(num / 1000);
                    return num;
                };

                const observer = new IntersectionObserver(
                    (entries, obs) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                animateCounter(entry.target);
                                obs.unobserve(entry.target);
                            }
                        });
                    }, {
                        threshold: 0.5
                    }
                );

                counters.forEach(counter => observer.observe(counter));
            });
        </script>



        <section class="container demo-section">

            <div class="demo-row">
                <div class="demo-media">
                    <img src="image/lawncare/schedule.jpg" alt="Invoicing Demo">
                </div>
                <div class="demo-text">
                    <span class="label">OUR MISSION</span>
                    <h2>Simplifying payments for modern businesses</h2>
                    <p>At PayLync, our mission is to remove the complexity from invoicing and payments.
                        We help businesses focus on growth while we handle the numbers, automation, and reliability.</p>
                    <ul>
                        <li>Built for small businesses & freelancers</li>
                        <li>utomation that saves hours every week</li>
                        <li>Reliable, secure, and easy to use</li>
                    </ul>
                    <br>
                </div>
            </div>

            <div class="demo-row">
                <div class="demo-media">
                    <img src="image/lawncare/invoices.jpg" alt="Tap to Pay Demo">
                </div>
                <div class="demo-text">
                    <span class="label">OUR APPROACH</span>
                    <h2>Designed with real business needs in mind</h2>
                    <p>We don’t build features just to look good.
                        Every tool in PayLync is designed to solve real problems faced by business owners every day.</p>
                    <ul>
                        <li>Simple setup, no technical knowledge required</li>
                        <li>Flexible invoicing & payment options</li>
                        <li>Scales as your business grows</li>
                    </ul>
                    <br>
                </div>
            </div>

            <!-- <div class="demo-row">
                <div class="demo-media">
                    <img src="https://placehold.co/800x450/111/333?text=Video:+Customer+Portal+Walkthrough" alt="Portal Demo">
                    <div class="play-btn"></div>
                </div>
                <div class="demo-text">
                    <span class="label">Client Experience</span>
                    <h2>A professional portal for your clients</h2>
                    <p>Give your clients a dedicated link to view estimates, pay outstanding invoices, and approve work orders.</p>
                    <ul>
                        <li>Custom branded with your logo</li>
                        <li>Clients can download receipts</li>
                        <li>Reduce "What do I owe?" calls</li>
                    </ul>
                </div>
            </div> -->

        </section>

        <section class="paylync-aboutus-cards-section">
            <div class="container">
                <h2 class="paylync-aboutus-heading">
                    Industries That Trust Invoice Maker by PayLync
                </h2>
                <p class="paylync-aboutus-text">
                    Invoice Maker by PayLync is built to support a wide range of service-based businesses.
                    From independent professionals to growing teams, PayLync helps streamline invoicing
                    and get paid faster.
                </p>

                <div class="paylync-aboutus-cards">

                    <div class="paylync-aboutus-card">
                        <img src="image/handyman.svg" alt="Handyman">
                        <h3>Handyman</h3>
                        <p>Create and send invoices instantly after every job.</p>
                    </div>

                    <div class="paylync-aboutus-card">
                        <img src="image/electrician.svg" alt="Electrician">
                        <h3>Electrician</h3>
                        <p>Professional invoicing for residential and commercial work.</p>
                    </div>

                    <div class="paylync-aboutus-card">
                        <img src="image/landscaping.svg" alt="Landscaping">
                        <h3>Landscaping</h3>
                        <p>Bill clients quickly for ongoing and seasonal services.</p>
                    </div>

                    <div class="paylync-aboutus-card">
                        <img src="image/cleaning.svg" alt="Cleaning">
                        <h3>Cleaning</h3>
                        <p>Simple invoicing for recurring and one-time jobs.</p>
                    </div>

                    <div class="paylync-aboutus-card">
                        <img src="image/genral-contracting.svg" alt="General Contracting">
                        <h3>General Contracting</h3>
                        <p>Manage invoices across multiple projects with ease.</p>
                    </div>

                    <div class="paylync-aboutus-card">
                        <img src="image/plumbing.svg" alt="Plumbing">
                        <h3>Plumbing</h3>
                        <p>Get paid faster for emergency and scheduled services.</p>
                    </div>

                    <div class="paylync-aboutus-card">
                        <img src="image/lawncare.svg" alt="Lawn Care">
                        <h3>Lawn Care</h3>
                        <p>Track jobs and payments without paperwork.</p>
                    </div>

                    <div class="paylync-aboutus-card">
                        <img src="image/freelance.svg" alt="Freelancers">
                        <h3>Freelancers</h3>
                        <p>Send polished invoices that reflect your brand.</p>
                    </div>

                    <div class="paylync-aboutus-card">
                        <img src="image/construction.svg" alt="Construction">
                        <h3>Construction</h3>
                        <p>Organized billing for growing construction businesses.</p>
                    </div>

                </div>
            </div>
        </section>

        <section class="paylync-products-section">
    <div class="container">

        <h2 class="paylync-products-heading">
            Powerful Products Built by PayLync
        </h2>

        <p class="paylync-products-text">
            PayLync offers focused tools designed to simplify billing, invoicing,
            and financial workflows for modern businesses.
        </p>

        <div class="paylync-products-grid">

            <!-- Invoice Maker -->
            <div class="paylync-product-card">
                <span class="paylync-product-badge">Invoice Tool</span>
                <h3>Invoice Maker</h3>
                <p>
                    Create, send, and track invoices in seconds.
                    Built for freelancers and service-based businesses.
                </p>

                <ul>
                    <li>Instant invoice creation</li>
                    <li>Automatic tax calculations</li>
                    <li>Send via email or text</li>
                </ul>
            </div>

            <!-- QuickBooks Extension -->
            <div class="paylync-product-card">
                <span class="paylync-product-badge">Integration</span>
                <h3>QuickBooks Online Extension</h3>
                <p>
                    Seamlessly connect PayLync with QuickBooks Online
                    to keep your accounting in sync.
                </p>

                <ul>
                    <li>Two-way data sync</li>
                    <li>Reduced manual entry</li>
                    <li>Accurate financial records</li>
                </ul>
            </div>

        </div>

    </div>
</section>



        <!-- <section class="gallery-section">
            <div class="container">
                <h2>More Ways to Grow</h2>
                <div class="gallery-grid">
                    <div class="gallery-card">
                        <div class="demo-media">
                            <img src="https://placehold.co/600x340/ddd/333?text=Video" alt="Thumbnail">
                            <div class="play-btn" style="width: 50px; height: 50px;"></div>
                        </div>
                        <h3>Team Scheduling</h3>
                        <p>How to dispatch jobs to your team.</p>
                    </div>
                    <div class="gallery-card">
                        <div class="demo-media">
                            <img src="https://placehold.co/600x340/ddd/333?text=Video" alt="Thumbnail">
                            <div class="play-btn" style="width: 50px; height: 50px;"></div>
                        </div>
                        <h3>Expense Tracking</h3>
                        <p>Snap photos of receipts and organize costs.</p>
                    </div>
                    <div class="gallery-card">
                        <div class="demo-media">
                            <img src="https://placehold.co/600x340/ddd/333?text=Video" alt="Thumbnail">
                            <div class="play-btn" style="width: 50px; height: 50px;"></div>
                        </div>
                        <h3>Reporting & Taxes</h3>
                        <p>Export your data for tax season effortlessly.</p>
                    </div>
                </div>
            </div>
        </section> -->








    </div>
    <?php include("includes/footer.php"); ?>
    <script src="js/jquery-3.5.1.min.dc5e7f18c8.js" type="text/javascript"></script>
    <script src="js/webflow.js" type="text/javascript"></script>
</body>

</html>