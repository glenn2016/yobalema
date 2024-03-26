<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary btn-user btn-block', 'style' => 'background-color:#F77D0A; border:#F77D0A; font-weight: 600; border-radius:20px;']) }}>
    {{ $slot }}
</button>
