const chatBox = document.querySelector(".chat-box");
const toggleButton = document.querySelector(".chat-header button");
const chatContent = document.querySelector(".chat-content");
const chatForm = document.querySelector('.chat-form');
const responseBox = document.querySelector(".chat-response");
const submitButton = chatForm.querySelector("button[type=submit]");

// Animate widget into view
window.addEventListener("DOMContentLoaded", () => {
  chatBox.classList.add("loaded");
  chatContent.style.maxHeight = chatContent.scrollHeight + "px";
  toggleButton.innerText = "Hide";
});

// Toggle open/close
toggleButton.addEventListener('click', () => {
  if (chatContent.classList.contains('active')) {
    chatContent.style.maxHeight = null;
    chatContent.classList.remove('active');
    toggleButton.innerText = "Show";
  } else {
    chatContent.classList.add('active');
    chatContent.style.maxHeight = chatContent.scrollHeight + "px";
    toggleButton.innerText = "Hide";
  }
});

// Close if clicked outside
window.addEventListener('click', (e) => {
  if (!chatBox.contains(e.target)){
    chatContent.style.maxHeight = null;
    chatContent.classList.remove('active');
    toggleButton.innerText = "Show";
  }
});

// Handle form submission
chatForm.addEventListener('submit', async (e) => {
  e.preventDefault();

  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const phone = document.getElementById("phone").value.trim();
  const message = document.getElementById("message").value.trim();

  // Basic check
  if (!name || !email || !message || !phone) {
    responseBox.innerHTML = "Please fill in all fields.";
    return;
  }

  // Show loading state
  submitButton.disabled = true;
  submitButton.innerText = "Sending...";
  responseBox.innerHTML = `<em>Processing... please wait, this might take a few seconds.</em>`;

  try {
    const res = await fetch("./api/chatbot_api.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ name, email, phone, message})
    });

    if (!res.ok) throw new Error("Server error");

    const data = await res.json();
    const reply = data.choices?.[0]?.message?.content;

    responseBox.innerHTML = `<strong>AI says:</strong><br>${reply || "No response received."}`;
  } catch (err) {
    responseBox.innerHTML = `<span style="color:red;">Sorry, there was an issue contacting our assistant. Please try again later.</span>`;
    console.error("Chatbot error:", err);
  } finally {
    submitButton.disabled = false;
    submitButton.innerText = "PROCEED";
  }
});