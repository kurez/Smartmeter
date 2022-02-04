<div>
   <span class="lead">@if($meter->status == "on") On @else Off @endif</span>
   <br>
   <a href="#" wire:click.prevent="changeStatus" class="btn btn-secondary">Turn @if($meter->status == "on") Off @else On @endif</a>
</div>
