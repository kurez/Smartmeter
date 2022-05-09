<div>
   <span class="lead">@if($meter->mode == "prepaid") Prepaid @else Postpaid @endif</span>
   <br>
   <a href="#" wire:click.prevent="changeMode" class="btn btn-secondary">Turn @if($meter->mode == "prepaid") Postpaid @else Prepaid @endif</a>
</div>
