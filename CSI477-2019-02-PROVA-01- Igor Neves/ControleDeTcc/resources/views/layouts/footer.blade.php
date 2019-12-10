<footer class="footer">
    <div class="container-fluid">
        <ul class="nav">
           
            <li class="nav-item">
                <a href="{{ route('sobre') }}" class="nav-link">
                    {{ __('Sobre') }}
                </a>
            </li>
           
            
        </ul>
        <div class="copyright">
            &copy; {{ now()->year }} {{ __('feito com') }} <i class="tim-icons icon-heart-2"></i> {{ __('por') }}
            <a>{{ __('Igor Neves,') }}</a>
            {{ __('para a prova de Sistemas Web') }}.
        </div>
    </div>
</footer>
