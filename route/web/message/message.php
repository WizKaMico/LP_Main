<div class="chat-box fixed-positioning">
    <div class="chat-header">
        <span>TALK TO US</span>
        <button>Show</button>
    </div>
    <div class="chat-content">
        <p class="chat-title">We are here to help you regain control of your finances.</p>

        <!-- Chat Form -->
        <form class="chat-form" id="chat-form">
            <div>
                <label for="name">Your Name <span>*</span></label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">E-mail <span>*</span></label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="phone">Phone <span>*</span></label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div>
                <label for="message">Message <span>*</span></label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">PROCEED</button>
        </form>

        <!-- AI Response -->
        <div class="chat-response" id="chat-response" style="margin-top:10px; display:none;"></div>
    </div>
</div>