document.addEventListener('DOMContentLoaded', () => {
    const tabLinks = document.querySelectorAll('.tab-link');
    const tabContent = document.getElementById('tab-content');
    // const tabProfile = document.getElementById('tab-profile');


    tabLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const url = link.dataset.url; // Get the URL from the data-url attribute

            // Fetch the content from the server
            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text(); // Get the HTML content
                })
                .then(html => {
                    tabContent.innerHTML = html; // Inject the content into the tab-content div
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                    tabContent.innerHTML = `<h1>Error loading content</h1>`;
                });
        });
    });
});
