// Sample data for blog posts
const blogPosts = [
    { title: "Introduction to Machine Learning", content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit." },
    { title: "Getting Started with Python Programming", content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit." },
    { title: "The Importance of Continuous Learning", content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit." },
    // Add more blog posts here
];

// Function to generate HTML for each blog post
funtion generateBlogPostHTML(post) {
    return `
        <article class="blog-post">
            <h2>${post.title}</h2>
            <p>${post.content}</p>
        </article>
    `;
}

// Function to display blog posts on the page
function displayBlogPosts() {
    const blogList = document.getElementById('blog-list');
    let html = '';
    blogPosts.forEach(post => {
        html += generateBlogPostHTML(post);
    });
    blogList.innerHTML = html;
}

// Display the blog posts when the page loads
displayBogPosts();
