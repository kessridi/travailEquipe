<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <style>
        /* Styles pour le formulaire */
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
            font-size: 18px;
        }




        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
            font-size: 18px;
            background-color: #f1f1f1;
        }

        input:focus,
        textarea:focus {
            background-color: #fff;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
        }

        textarea {
            height: 150px;
            resize: none;
        }

        button {
            padding: 10px 30px;
            border-radius: 5px;
            border: none;
            background-color: #007bff;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0062cc;
        }

        /* Styles pour la page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
            font-size: 36px;
            text-transform: uppercase;
            color: #007bff;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px;
            margin: 20px 0;
        }
    </style>