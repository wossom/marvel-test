

<div class="container bg-light rounded">
    <div class="row">
        <div class="col">
            <form action="<?=base_url?>comic/comic_characters_id" method="POST" class="p-3">
                <div class="mb-3">
                    <label class="form-label"> Comic character id: </label>
                    <input type="text" class="form-control" name="id" placeholder="e.g.1009351" required>
                </div>
                <button type="input" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</div>
