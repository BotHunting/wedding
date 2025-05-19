/**
 * Main JavaScript file for website interactivity
 */

// Initialize when DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    initializeButton();
    console.log("Website initialized 🚀");
});

/**
 * Button interaction functionality
 */
function initializeButton() {
    const btn = document.querySelector("button");
    
    if (!btn) {
        console.warn("Button element not found in the document");
        return;
    }

    btn.addEventListener('click', () => {
        btn.classList.toggle("dipped");
        
        // Add animation effect
        btn.style.transform = `translate(${Math.random() * 100}px, ${Math.random() * 100}px)`;
        
        // Reset position after animation
        setTimeout(() => {
            btn.style.transform = 'none';
        }, 500);
    });
}

/**
 * File navigation helper
 * @param {string} file - File path
 * @param {number} line - Line number
 */
const navigateToFile = (file, line) => {
    window.parent.postMessage({
        type: "glitch/go-to-line",
        payload: { 
            filePath: file, 
            line: line 
        }
    }, "*");
};

// Initialize file openers
document.querySelectorAll(".fileopener").forEach(opener => {
    opener.addEventListener('click', () => {
        navigateToFile(opener.dataset.file, opener.dataset.line);
    });
});
