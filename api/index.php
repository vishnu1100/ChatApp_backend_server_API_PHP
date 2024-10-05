<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
        }
        
        #chat1 {
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .chat-header {
            background: linear-gradient(135deg, #39c0ed, #0096d6);
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .chat-message {
            border-radius: 15px;
            padding: 15px;
            margin-bottom: 15px;
        }

        .message-sent {
            background-color: rgba(57, 192, 237, .2);
        }

        .message-received {
            background-color: #e0e0e0;
        }

        .avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
        }

        .form-control {
            border: 2px solid #39c0ed;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #0096d6;
            box-shadow: 0 0 5px rgba(57, 192, 237, .5);
        }

        .send-button {
            background-color: #39c0ed;
            color: white;
        }

        .send-button:hover {
            background-color: #0096d6;
        }
    </style>
</head>
<body>
    <section>
        <div class="container py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card" id="chat1">
                        <div class="card-header d-flex justify-content-between align-items-center p-3 chat-header">
                            <i class="fas fa-angle-left text-white"></i>
                            <p class="mb-0 fw-bold text-white">Live Chat</p>
                            <i class="fas fa-times text-white"></i>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-start mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="avatar 1" class="avatar">
                                <div class="chat-message p-3 ms-3 message-received">
                                    <p class="small mb-0">Hello and thank you for visiting MDBootstrap. Please click the video below.</p>
                                </div>
                            </div>

                            <div class="d-flex flex-row justify-content-end mb-4">
                                <div class="chat-message p-3 me-3 message-sent">
                                    <p class="small mb-0">Thank you, I really like your product.</p>
                                </div>
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp" alt="avatar 2" class="avatar">
                            </div>

                            <div class="d-flex flex-row justify-content-start mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="avatar 1" class="avatar">
                                <div class="ms-3">
                                    <div class="bg-image">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/screenshot1.webp" class="rounded" alt="video" style="border-radius: 15px;">
                                        <a href="#!">
                                            <div class="mask"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-row justify-content-start mb-4">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="avatar 1" class="avatar">
                                <div class="chat-message p-3 ms-3 message-received">
                                    <p class="small mb-0">...</p>
                                </div>
                            </div>

                            <div class="form-outline">
                                <textarea class="form-control" id="textAreaExample" rows="4" placeholder="Type your message"></textarea>
                            </div>

                            <button type="button" class="btn send-button mt-3">Send <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
