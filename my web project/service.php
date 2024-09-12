<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - qkit fashion platform</title>
    <style>
      
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            scroll-behavior: smooth;
        }

       
        main {
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            background-image: url('https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/cheap-clothing-websites-1527718634.jpg%3fcrop%3d1.00xw:1.00xh%3b0%2c0%26resize%3d1200:*');
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
            color: white;
        }

        
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 0;
        }

        
        .services {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 2rem 1rem;
            color: white;
        }

        h1 {
            font-size: 3rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            margin-bottom: 2rem;
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            justify-items: center;
        }

        .service-card {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 10px;
            padding: 2rem;
            max-width: 350px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: #333;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.4));
            z-index: 1;
            transition: opacity 0.3s;
            opacity: 0;
        }

        .service-card:hover::before {
            opacity: 1;
        }

        .service-card h2 {
            font-size: 1.8rem;
            margin-top: 0;
            color: #212166;
        }

        .service-card p {
            font-size: 1rem;
            color: #555;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        
        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1.2em;
            color: #fff;
            background-color: #212166;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
            margin-top: 1rem;
        }

        .cta-button:hover {
            background-color: #333;
            transform: translateY(-3px);
        }

        
        footer {
            background-color: #212166;
            color: white;
            text-align: center;
            padding: 1.5rem 0;
            position: relative;
            margin-top: 2rem;
        }

        footer p {
            margin: 0;
            font-size: 1rem;
        }

       
        @media (min-width: 768px) {
            .service-card {
                padding: 3rem;
            }

            h1 {
                font-size: 3.5rem;
            }

            .cta-button {
                font-size: 1.1em;
            }
        }

        @media (max-width: 768px) {
            footer {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>

    <main>
      
        <div class="overlay"></div>

        <section class="services">
            <h1>Our Services</h1>

            <div class="service-grid">
               
                <div class="service-card">
                    <h2>Personal Styling</h2>
                    <p>Get personalized fashion advice from our expert stylists to help you look and feel your best.</p>
                    <a href="#" class="cta-button">Learn More</a>
                </div>

              
                <div class="service-card">
                    <h2>Alterations</h2>
                    <p>Need a perfect fit? Our skilled tailors offer professional alteration services to ensure your clothes fit just right.</p>
                    <a href="#" class="cta-button">Learn More</a>
                </div>

               
                <div class="service-card">
                    <h2>Custom Designs</h2>
                    <p>Create a unique piece that reflects your personal style with our custom design services.</p>
                    <a href="#" class="cta-button">Learn More</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 qkit fashion platform. All Rights Reserved.</p>
    </footer>

</body>
</html>
