<div>
    <form wire:submit.prevent="createPoll">
        <label> Poll Title</label>
        <input type="text" wire:model.live="title" />

        @error("title")
        <div class="text-red-500">{{$message}}</div>
        @enderror
        <div class="mt-4">
            <button class="btn" wire:click.prevent="addOption">Add option</button>
        </div>

        <div class="mt-4">
            @foreach ($options as $index => $option)
            <div class="mb-4">
                <label>Option {{$index + 1}}</label>
                <div class="flex gap-2">
                    <input type="text" wire:model.live="options.{{$index}}" />
                    <button class="btn" wire:click="removeOption({{$index}})">Remove</button>
                </div>
                @error("options.{$index}")
                <div class="text-red-500">{{$message}}</div>
                @enderror
            </div>
            @endforeach
        </div>

        <button class="btn">Create Poll</button>
    </form>
</div>