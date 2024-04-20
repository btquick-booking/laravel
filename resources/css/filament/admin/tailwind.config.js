import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './resources/views/components/**/*.blade.php',
        './resources/views/*.blade.php',
        './resources/views/livewire/**/*.blade.php',
        './resources/views/livewire/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
}
