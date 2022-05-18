<div>
    <form method="post" wire:submit.prevent='sendMailToall'>
        <div class=" form-group">
            <input type="text" name="subject" wire:model.defer='subject'
                class="form-control"
                placeholder="Subject" required>
        </div>
        <div class=" form-group">
            <textarea placeholder="Type your message here" wire:model.defer='message'
                class="form-control"
                name="message" row="8"
                placeholder="Type your message here"
                required></textarea>
        </div>
        <div class=" form-group">

            <button type="submit" class="btn btn-secondary"
                wire:loading.attr="disabled">
                <span class=""
                    wire:loading>Sending...</span>
                <span wire:loading.remove>Send</span>
            </button>
        </div>

    </form>
</div>
