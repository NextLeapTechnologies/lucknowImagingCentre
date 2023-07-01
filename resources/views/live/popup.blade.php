<!-- HTML Markup -->
<button id="popupButton">Open Popup</button>

<div id="popup" class="popup">
    <div class="popup-content">
        <!-- Content of the popup goes here -->
        <p>This is the popup content.</p>
    </div>
</div>

<!-- CSS Styling -->
<style>
    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .popup-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        border-radius: 5px;
    }
</style>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#popupButton').click(function() {
            showPopup();
        });
        
        function showPopup() {
            $('#popup').fadeIn();
        }
    });
</script>
