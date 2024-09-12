<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help & Support - qkit fashion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            padding: 20px;
            background-image: url('https://th.bing.com/th/id/R.d58abf99f19aab3b9da0c17e897ca4af?rik=g%2bXPN5%2fMBWTiTw&riu=http%3a%2f%2feskipaper.com%2fimages%2ffashion-wallpaper-4.jpg&ehk=5glGXxTGhrNJSqfGRq4OUSP1qfTgEsRxHEg2Yr%2bUID0%3d&risl=&pid=ImgRaw&r=0'); 
            background-repeat: no-repeat;
            background-size: cover; 
            background-position: center; 
            position: relative;
        }

        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.2;
            z-index: 0;
            pointer-events: none;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1; 
        }

        h2 {
            text-align: center;
            color: #212166;
        }

        .faq-section {
            margin-bottom: 40px;
        }

        .faq-question {
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            color: #333399;
        }

        .faq-question:hover {
            background-color: #e0e0e0;
        }

        .faq-answer {
            display: none;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #ffe6e6;
            border-radius: 4px;
            color: #cc0000;
            transition: max-height 0.4s ease;
        }

        .faq-answer.active {
            display: block;
        }

        .help-form {
            margin-top: 40px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            border-color: #212166;
            outline: none;
        }

        textarea {
            resize: vertical;
            height: 120px;
        }

        button {
            background-color: #212166;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #333399;
            transform: translateY(-3px);
        }

        button:focus {
            outline: none;
            box-shadow: 0 0 5px #212166;
        }

        .form-group input:invalid,
        .form-group textarea:invalid {
            border-color: red;
        }

        .form-group input:invalid:focus,
        .form-group textarea:invalid:focus {
            border-color: #ff3333;
            outline: none;
        }

        .success-message {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            color: green;
            font-weight: bold;
            display: none;
        }

        .faq-answer {
            overflow: hidden;
            max-height: 0;
            transition: max-height 0.3s ease-out;
        }

        .faq-answer.active {
            display: block;
            max-height: 1000px; 
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            button {
                width: 100%;
                padding: 10px;
            }

            .faq-question {
                padding: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="watermark">
        <img src="https://your-watermark-image-url.png" alt="Watermark" style="width: 300px; height: auto;">
    </div>

    <div class="container">
        <h2>Help & Support</h2>

        <div class="faq-section">
            <h3>Frequently Asked Questions</h3>
            <div class="faq">
                <p class="faq-question" role="button" tabindex="0">1. How can I track my order?</p>
                <p class="faq-answer">You can track your order through the "My Orders" section of your account. If you encounter issues, please contact our support team.</p>

                <p class="faq-question" role="button" tabindex="0">2. What is the return policy?</p>
                <p class="faq-answer">We accept returns within 30 days of purchase.</p>

                <p class="faq-question" role="button" tabindex="0">3. How can I contact customer support?</p>
                <p class="faq-answer">You can reach us through this help page or by sending an email to qkitfashion@gmail.com.</p>
            </div>
        </div>

        <div class="help-form">
            <h3>Need Further Assistance? Contact Us!</h3>
            <form id="helpForm">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Question/Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
            <div class="success-message" id="successMessage">
                Thank you for contacting us! We'll get back to you soon.
            </div>
        </div>
    </div>

    <script>
        const faqQuestions = document.querySelectorAll('.faq-question');
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                answer.classList.toggle('active');
            });

            question.addEventListener('keypress', (e) => {
                if (e.key === "Enter") {
                    const answer = question.nextElementSibling;
                    answer.classList.toggle('active');
                }
            });
        });

        // Form submission handling with success message
        const form = document.getElementById('helpForm');
        const successMessage = document.getElementById('successMessage');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Simulate form submission (e.g., send data to server)
            successMessage.style.display = 'block';
            
            // Reset form fields after submission
            form.reset();
        });
    </script>
</body>
</html>
