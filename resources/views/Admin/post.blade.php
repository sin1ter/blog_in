<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Create Blog Post</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Create Blog Post</h3>
                    </div>
                    <div class="card-body">
                        <form action="process_blog_post.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="postTitle" class="form-label">Post Title</label>
                                <input type="text" class="form-control" id="postTitle" name="postTitle" required>
                            </div>
                            <div class="mb-3">
                                <label for="postContent" class="form-label">Post Content</label>
                                <textarea class="form-control" id="postContent" name="postContent" rows="6" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="postImage" class="form-label">Image</label>
                                <input type="file" class="form-control" id="postImage" name="postImage">
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select" id="category" name="category" required>
                                    <option value="" disabled selected>Select a category</option>
                                    <option value="technology">Technology</option>
                                    <option value="travel">Travel</option>
                                    <option value="food">Food</option>
                                    <option value="lifestyle">Lifestyle</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
