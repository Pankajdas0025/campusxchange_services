<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />

  <style>
    :root { --secondary: #263F5A; }

    .chatbot-widget { position: fixed; bottom: 120px; left: 20px; z-index: 1000; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; }
    .chatbot-toggle { width: 56px; height: 56px; border-radius: 50%; background:#F8627B; border: 1px solid white; color: white; font-size: 1.5rem; cursor: pointer; box-shadow: 0 4px 12px rgba(0,0,0,0.15); transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; animation: pulseShadow 2s infinite; }

    @keyframes pulseShadow { 0% {box-shadow: 0 0 0 0 rgba(244, 63, 94, 1);} 70%{box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);} 100% {box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);} }

    .chatbot-toggle:hover { transform: rotate(360deg); box-shadow: 0 6px 16px rgba(0,0,0,0.2); }
    .chatbot-toggle:active { transform: scale(0.95); }

    .chatbot-popup { position: fixed; bottom: 10px; right: 15px; width: 350px; height: 500px; background: white; border-radius: 12px; box-shadow: 0 5px 40px rgba(0,0,0,0.16); display: flex; flex-direction: column; animation: slideUp 0.3s ease; z-index: 1001; }
    @keyframes slideUp { from { opacity: 0; transform: translateY(20px);} to { opacity: 1; transform: translateY(0);} }

    .chatbot-header { background: linear-gradient(135deg, #F8627B, #263F5A); color: white; padding: 1.5rem 1rem; border-radius: 12px 12px 0 0; display: flex; justify-content: space-between; align-items: center;}
    .chatbot-header h3 { margin: 0; font-size: 1rem; font-weight: 600; }
    .chatbot-close { background: none; border: none; color: white; font-size: 1.5rem; cursor: pointer; padding: 0; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center; }
    .chatbot-close:hover { opacity: 0.8; }

    .chatbot-messages { flex: 1; overflow-y: auto; padding: 1.5rem; background: #f8f9fa; }
    .chatbot-message { margin-bottom: 1rem; display: flex; animation: fadeIn 0.3s ease; }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(10px);} to { opacity: 1; transform: translateY(0);} }

    .message-bot { justify-content: flex-start; }
    .message-user { justify-content: flex-end; }

    .message-content { max-width: 80%; padding: 0.75rem 1rem; border-radius: 12px; word-wrap: break-word; line-height: 1.4; font-size: 0.95rem; }
    .message-bot .message-content { background: white; color: #333; border: 1px solid #e0e0e0; }
    .message-user .message-content { background: var(--secondary); color: white; }

    .chatbot-input-area { padding: 1rem; border-top: 1px solid #e0e0e0; background: white; border-radius: 0 0 12px 12px; }
    .chatbot-input-group { display: flex; gap: 0.5rem; }
    .chatbot-input { flex: 1; border: 1px solid #e0e0e0; border-radius: 20px; padding: 0.6rem 1rem; font-size: 0.95rem; outline: none; transition: all 0.2s ease; }
    .chatbot-input:focus { border-color: var(--secondary); box-shadow: 0 0 0 3px rgba(255, 107, 107, 0.1); }

    .chatbot-send { background:#F8627B; border: none; color: white; width: 40px; height: 40px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.2s ease; font-size: 1rem; }
    .chatbot-send:active { transform: scale(0.95); }

    .chatbot-suggestions { display: flex; flex-direction: column; gap: 0.5rem; margin-top: 1rem; }
    .suggestion-btn { background: white; border: 1px solid #e0e0e0; padding: 0.6rem 1rem; border-radius: 8px; cursor: pointer; text-align: left; font-size: 0.9rem; transition: all 0.2s ease; color: #333; }
    .suggestion-btn:hover { background: #f8f9fa; border-color: var(--secondary); color: var(--secondary); }

    .typing-indicator { display: flex; gap: 4px; padding: 0.75rem 1rem; }
    .typing-dot { width: 8px; height: 8px; border-radius: 50%; background: #ccc; animation: typing 1.4s infinite; }
    .typing-dot:nth-child(2) { animation-delay: 0.2s; }
    .typing-dot:nth-child(3) { animation-delay: 0.4s; }
    @keyframes typing { 0%,60%,100% { opacity: 0.5; transform: translateY(0);} 30% { opacity: 1; transform: translateY(-10px);} }

    @media (max-width: 480px) {
      .chatbot-widget { bottom: 100px; }
      .chatbot-popup { width: 90vw; margin: 0 auto; height: 500px; bottom: 20px; right: 0; left: 0; }
      .message-content { max-width: 90%; }
      .chatbot-input { width: 60vw; }
      .chatbot-send { width: 30px; height: 30px; margin-top: 4px; }
      .chatbot-header h3{ width: 100%;padding:2.5px 3px;}
    }

    .chatbot-messages::-webkit-scrollbar { width: 6px; }
    .chatbot-messages::-webkit-scrollbar-thumb { background: #ccc; border-radius: 3px; }
  </style>
</head>

<body>
  <div class='chatbot-widget'>
    <button class='chatbot-toggle' id='chatbotToggle' title='Open Chat'>😎</button>

    <div class='chatbot-popup' id='chatbotPopup' style='display: none;'>
        <div class='chatbot-header'>
          <div style='height:20px; width:20px; border-radius:50%; background:green; animation: pulseShadow 2s infinite;'></div>
          <h3 style='margin-right:85px; color:white'>CampusXchange Assistant</h3>
        <button class='chatbot-close' id='chatbotClose' title='Close'>✕</button>
      </div>

      <div class='chatbot-messages' id='chatbotMessages'>
        <div class='chatbot-message message-bot'>
          <div class='message-content'>
            Hello! 👋 Welcome to <b>CampusXchange</b>.<br><br>
            I can help you with <b>Web Development</b> (main), <b>SEO services</b>, and <b>Tech Notes / Basic Projects</b>.<br>
            What are you looking for today?
          </div>
        </div>
      </div>

      <div class='chatbot-input-area'>
        <div class='chatbot-input-group'>
          <input type='text' class='chatbot-input' id='chatbotInput' placeholder='Type your message...' autocomplete='off'>
          <button class='chatbot-send' id='chatbotSend' title='Send'>➤</button>
        </div>

        <div class='chatbot-suggestions' id='chatbotSuggestions'>
          <button class='suggestion-btn' data-message='I want a website for my business'>I want a website for my business</button>
          <button class='suggestion-btn' data-message='Tell me about your SEO services'>Tell me about your SEO services</button>
          <button class='suggestion-btn' data-message='How to download tech notes or projects?'>How to download tech notes or projects?</button>
        </div>
      </div>
    </div>
  </div>

<script>
  class ChatbotWidget {
    constructor() {
      this.toggle = document.getElementById('chatbotToggle');
      this.popup = document.getElementById('chatbotPopup');
      this.closeBtn = document.getElementById('chatbotClose');
      this.input = document.getElementById('chatbotInput');
      this.sendBtn = document.getElementById('chatbotSend');
      this.messagesContainer = document.getElementById('chatbotMessages');
      this.suggestionsContainer = document.getElementById('chatbotSuggestions');

      this.isOpen = false;
      this.isLoading = false;

      // ✅ Simple conversation context (for better suggestion flow)
      this.currentContext = null; // 'webdev_type' | 'webdev_business' | 'webdev_portfolio' | 'webdev_ecommerce' | null

      this.faq = [
        {
          match: /(hello|hi|hey|greetings|good morning|good afternoon|good evening)/i,
          reply: '<b>Hello!</b> Welcome to <b>CampusXchange</b> 👋<br><br>We primarily provide <b>Web Development</b>, along with <b>SEO</b> and <b>Tech Notes / Basic Projects</b>. What do you need today?',
          suggestions: ['I want a website for my business', 'Tell me about your SEO services', 'How to download tech notes?']
        },

        // Web Development - general
        {
          match: /(web\s*development|website|site|web\s*design|portfolio|business\s*website|ecommerce|landing\s*page|redesign)/i,
          reply: '<b>Web Development at CampusXchange:</b><br><br>✅ Business Website / Portfolio<br>✅ Landing Page / One-page Site<br>✅ E-commerce / Product Website<br>✅ Website Redesign & Speed Optimization<br><br><b>Quick question:</b> What type of website do you want?',
          suggestions: ['Business website', 'Portfolio website', 'E-commerce website'],
          setContext: 'webdev_type'
        },

        // SEO
        {
          match: /(seo|search engine|rank|ranking|google|keywords|backlink|on page|off page|technical seo|local seo|gmb)/i,
          reply: '<b>SEO Services at CampusXchange:</b><br><br>✅ On-page SEO<br>✅ Technical SEO (speed, indexing, schema)<br>✅ Local SEO (GMB/Maps)<br>✅ Off-page strategy<br><br>Tell me your niche + target city to suggest the right plan.',
          suggestions: ['On-page SEO', 'Local SEO (GMB)', 'Technical SEO']
        },

        // Notes
        {
          match: /(notes|handout|handouts|tech\s*notes|download.*notes|get.*notes|notes.*download)/i,
          reply: '<b>To download Tech Notes on CampusXchange:</b><br><br>1. Open <b>Notes / Handouts</b><br>2. Select subject / topic<br>3. Click <b>Download</b><br><br>Which subject do you need?',
          suggestions: ['HTML Notes', 'JavaScript Notes', 'PHP Notes']
        },

        // Projects
        {
          match: /(project|projects|mini project|basic project|source code|download.*project|get.*project)/i,
          reply: '<b>Basic Projects on CampusXchange:</b><br><br>1. Go to <b>Projects</b> section<br>2. Choose tech category<br>3. Open project details<br>4. Click <b>Download / Source Code</b><br><br>Which tech stack are you using?',
          suggestions: ['HTML/CSS project', 'JavaScript project', 'PHP/MySQL project']
        },

        // Pricing
        {
          match: /(price|pricing|cost|charges|budget|how much|package|plan)/i,
          reply: '<b>Pricing depends on your requirements</b> (pages, design, features).<br><br>Tell me:<br>1) Website type<br>2) Pages count<br>3) Features (form/WhatsApp/payment/admin panel)<br><br>Then I will guide you with the best option.',
          suggestions: ['Business website 5 pages', 'Portfolio 1 page', 'E-commerce with payment']
        },

        // Contact
        {
          match: /(contact|support|help|email|problem|issue|bug|report|call|whatsapp)/i,
          reply: '<b>Contact CampusXchange Support:</b><br><br>✅ Use the <b>Contact Us</b> page (footer/menu)<br>✅ Or send your requirement here (Website/SEO/Notes/Projects)<br><br>Tell me what you need and I will guide you.',
          suggestions: ['I want web development', 'I need SEO', 'Notes/Projects help']
        },
                // SEO
        {
          match: /(seo|search engine|rank|ranking|google|keywords|backlink|on page|off page|technical seo|local seo|gmb)/i,
          reply: '<b>SEO Services at CampusXchange:</b><br><br>✅ On-page SEO<br>✅ Technical SEO (speed, indexing, schema)<br>✅ Local SEO (GMB/Maps)<br>✅ Off-page strategy<br><br>Tell me your niche + target city to suggest the right plan.',
          suggestions: ['On-page SEO', 'Local SEO (GMB)', 'Technical SEO'],
          setContext: 'seo_plan'
        },

        // Notes
        {
          match: /(notes|handout|handouts|tech\s*notes|download.*notes|get.*notes|notes.*download)/i,
          reply: '<b>To download Tech Notes on CampusXchange:</b><br><br>1. Open <b>Notes / Handouts</b><br>2. Select subject / topic<br>3. Click <b>Download</b><br><br><b>Which subject do you need?</b>',
          suggestions: ['HTML Notes', 'CSS Notes', 'JavaScript Notes', 'PHP Notes'],
          setContext: 'notes_subject'
        }

      ];
    }

    init() {
      this.toggle.addEventListener('click', () => this.toggleChat());
      this.closeBtn.addEventListener('click', () => this.closeChat());
      this.sendBtn.addEventListener('click', () => this.sendMessage());

      this.input.addEventListener('keypress', (e) => {
        if (e.key === 'Enter' && !e.shiftKey) {
          e.preventDefault();
          this.sendMessage();
        }
      });

      // Initial suggestion buttons: ✅ auto-send
      document.querySelectorAll('.suggestion-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
          this.handleSuggestionClick(e.target.dataset.message);
        });
      });
    }

    toggleChat() { this.isOpen ? this.closeChat() : this.openChat(); }
    openChat() { this.popup.style.display = 'flex'; this.isOpen = true; this.input.focus(); }
    closeChat() { this.popup.style.display = 'none'; this.isOpen = false; }

    sanitizeBotHtml(html) {
      return String(html).replace(/<(?!br\s*\/?|b\s*\/?|\/b\s*>|\/?br\s*>)[^>]*>/gi, '');
    }

    // ✅ New: suggestion auto-send
    handleSuggestionClick(text) {
      if (this.isLoading) return;
      this.input.value = text;
      this.sendMessage(); // auto-send
    }

    sendMessage() {
      const message = this.input.value.trim();
      if (!message || this.isLoading) return;

      this.addMessage(message, 'user');
      this.input.value = '';
      this.showTypingIndicator();

      setTimeout(() => {
        this.removeTypingIndicator();
        this.isLoading = false;

        const { reply, suggestions, setContext } = this.getOfflineReply(message);

        if (setContext) this.currentContext = setContext;

        this.addMessage(reply, 'bot');
        this.updateSuggestions(suggestions);
      }, 450);
    }

    // ✅ Context-based flow (fix for Business/Portfolio/E-commerce suggestions)
   getOfflineReply(message) {
  const text = String(message).trim();
  const lower = text.toLowerCase();

  // ✅ Context: Website type selection
  if (this.currentContext === 'webdev_type') {
    if (lower.includes('business')) {
      return {
        reply: '<b>Business Website ✅</b><br><br>Tell me:<br>1) Pages (Home, About, Services, Contact?)<br>2) Need WhatsApp / Call button?<br>3) Need enquiry form?<br><br>Based on this, I will guide the best layout & quote idea.',
        suggestions: ['5 pages + WhatsApp + Form', '3 pages simple site', 'Change website type'],
        setContext: 'webdev_business'
      };
    }

    if (lower.includes('portfolio')) {
      return {
        reply: '<b>Portfolio Website ✅</b><br><br>Tell me:<br>1) Single-page or multi-page?<br>2) Sections: About, Skills, Projects, Contact?<br>3) Need Resume download button?',
        suggestions: ['Single-page portfolio', 'Multi-page portfolio', 'Change website type'],
        setContext: 'webdev_portfolio'
      };
    }

    if (lower.includes('e-commerce') || lower.includes('ecommerce') || lower.includes('product')) {
      return {
        reply: '<b>E-commerce Website ✅</b><br><br>Tell me:<br>1) Number of products (approx.)<br>2) Payment required? (UPI/Card/COD)<br>3) Admin panel needed?',
        suggestions: ['Under 50 products + COD', 'Payment gateway + Admin panel', 'Change website type'],
        setContext: 'webdev_ecommerce'
      };
    }

    return {
      reply: 'Please select one option so I can guide you correctly:<br><br>✅ Business<br>✅ Portfolio<br>✅ E-commerce',
      suggestions: ['Business website', 'Portfolio website', 'E-commerce website'],
      setContext: 'webdev_type'
    };
  }

  // ✅ Bonus: allow user to reset type anytime
  if (lower.includes('change website type')) {
    return {
      reply: 'Sure ✅ What type of website do you want?',
      suggestions: ['Business website', 'Portfolio website', 'E-commerce website'],
      setContext: 'webdev_type'
    };
  }

  // ✅ Context: Notes subject selection
  if (this.currentContext === 'notes_subject') {
    // Map common subjects
    if (lower.includes('html')) {
      return {
        reply: '<b>HTML Notes ✅</b><br><br>Go to <b>Notes / Handouts</b> → select <b>HTML</b> → click <b>Download</b>.<br><br>Do you want <b>Beginner</b> or <b>Advanced</b> HTML notes?',
        suggestions: ['Beginner HTML', 'Advanced HTML', 'Change subject'],
        setContext: 'notes_level_html'
      };
    }

    if (lower.includes('css')) {
      return {
        reply: '<b>CSS Notes ✅</b><br><br>Open <b>Notes / Handouts</b> → select <b>CSS</b> → click <b>Download</b>.<br><br>Do you want <b>CSS Basics</b> or <b>Flex/Grid</b> focused notes?',
        suggestions: ['CSS Basics', 'Flex/Grid CSS', 'Change subject'],
        setContext: 'notes_level_css'
      };
    }

    if (lower.includes('javascript') || lower.includes('js')) {
      return {
        reply: '<b>JavaScript Notes ✅</b><br><br>Open <b>Notes / Handouts</b> → select <b>JavaScript</b> → click <b>Download</b>.<br><br>Which one you need?',
        suggestions: ['JS Basics', 'DOM + Events', 'Change subject'],
        setContext: 'notes_level_js'
      };
    }

    if (lower.includes('php')) {
      return {
        reply: '<b>PHP Notes ✅</b><br><br>Open <b>Notes / Handouts</b> → select <b>PHP</b> → click <b>Download</b>.<br><br>Which one you need?',
        suggestions: ['Core PHP', 'PHP + MySQL', 'Change subject'],
        setContext: 'notes_level_php'
      };
    }

    return {
      reply: 'Which subject do you need?',
      suggestions: ['HTML Notes', 'CSS Notes', 'JavaScript Notes', 'PHP Notes', 'Change subject'],
      setContext: 'notes_subject'
    };
  }

  // ✅ Notes: change subject anytime
  if (lower.includes('change subject')) {
    return {
      reply: 'No problem ✅ Which subject do you need?',
      suggestions: ['HTML Notes', 'CSS Notes', 'JavaScript Notes', 'PHP Notes'],
      setContext: 'notes_subject'
    };
  }

  // ✅ Context: SEO plan selection
  if (this.currentContext === 'seo_plan') {
    if (lower.includes('on-page')) {
      return {
        reply: '<b>On-page SEO ✅</b><br><br>To suggest the right plan, share:<br>1) Your niche (e.g., coaching, salon, ecommerce)<br>2) Website link (optional)<br>3) Target city (if local)<br><br>Then I will guide you step-by-step.',
        suggestions: ['Local business SEO', 'E-commerce SEO', 'Change SEO type'],
        setContext: 'seo_onpage'
      };
    }

    if (lower.includes('local') || lower.includes('gmb') || lower.includes('maps')) {
      return {
        reply: '<b>Local SEO (GMB/Maps) ✅</b><br><br>Tell me:<br>1) Business niche<br>2) City/Area<br>3) Do you already have GMB? (Yes/No)<br><br>I will suggest the best local SEO plan.',
        suggestions: ['Yes, I have GMB', 'No, create GMB', 'Change SEO type'],
        setContext: 'seo_local'
      };
    }

    if (lower.includes('technical')) {
      return {
        reply: '<b>Technical SEO ✅</b><br><br>Tell me:<br>1) Your website platform (WordPress / Custom / Shopify)<br>2) Any issue? (slow speed / indexing / mobile)<br>3) Website link (optional)<br><br>I will guide the fixes + plan.',
        suggestions: ['Speed issue', 'Indexing issue', 'Change SEO type'],
        setContext: 'seo_technical'
      };
    }

    return {
      reply: 'Please choose an SEO type so I can guide you correctly:',
      suggestions: ['On-page SEO', 'Local SEO (GMB)', 'Technical SEO'],
      setContext: 'seo_plan'
    };
  }

  // ✅ SEO: change type anytime
  if (lower.includes('change seo type')) {
    return {
      reply: 'Sure ✅ Which SEO service do you want?',
      suggestions: ['On-page SEO', 'Local SEO (GMB)', 'Technical SEO'],
      setContext: 'seo_plan'
    };
  }

  // Normal FAQ matching (default)
  for (const item of this.faq) {
    if (item.match.test(text)) {
      return {
        reply: item.reply,
        suggestions: item.suggestions,
        setContext: item.setContext || null
      };
    }
  }

  return {
    reply: 'I can help you with:<br><br>1) <b>Web Development</b><br>2) <b>SEO services</b><br>3) <b>Tech Notes</b> & <b>Basic Projects</b><br><br>Tell me what you need 🙂',
    suggestions: ['I want a website for my business', 'Tell me about your SEO services', 'How to download tech notes?'],
    setContext: null
  };
}

    addMessage(text, sender) {
      const messageDiv = document.createElement('div');
      messageDiv.className = `chatbot-message message-${sender}`;

      const contentDiv = document.createElement('div');
      contentDiv.className = 'message-content';

      if (sender === 'bot') contentDiv.innerHTML = this.sanitizeBotHtml(text);
      else contentDiv.textContent = text;

      messageDiv.appendChild(contentDiv);
      this.messagesContainer.appendChild(messageDiv);
      this.scrollToBottom();
    }

    showTypingIndicator() {
      this.isLoading = true;

      const messageDiv = document.createElement('div');
      messageDiv.className = 'chatbot-message message-bot';
      messageDiv.id = 'typing-indicator';

      const dotsDiv = document.createElement('div');
      dotsDiv.className = 'typing-indicator';
      dotsDiv.innerHTML = '<span class="typing-dot"></span><span class="typing-dot"></span><span class="typing-dot"></span>';

      messageDiv.appendChild(dotsDiv);
      this.messagesContainer.appendChild(messageDiv);
      this.scrollToBottom();
    }

    removeTypingIndicator() {
      const indicator = document.getElementById('typing-indicator');
      if (indicator) indicator.remove();
    }

    updateSuggestions(suggestions) {
      this.suggestionsContainer.innerHTML = '';

      suggestions.forEach(suggestion => {
        const btn = document.createElement('button');
        btn.className = 'suggestion-btn';
        btn.dataset.message = suggestion;
        btn.textContent = suggestion;

        // ✅ now auto-send
        btn.addEventListener('click', () => this.handleSuggestionClick(suggestion));

        this.suggestionsContainer.appendChild(btn);
      });
    }

    scrollToBottom() {
      this.messagesContainer.scrollTop = this.messagesContainer.scrollHeight;
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    const bot = new ChatbotWidget();
    bot.init();
  });
</script>

</body>
</html>
