<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PublicPagesTest extends TestCase
{
    /**
     * @param  non-empty-string  $uri
     * @param  non-empty-string  $view
     */
    #[DataProvider('publicPages')]
    public function test_public_page_renders_its_view_with_shared_layout(string $uri, string $view): void
    {
        $response = $this->get($uri);

        $response
            ->assertOk()
            ->assertViewIs($view)
            ->assertSeeText('Krill Harvest')
            ->assertSeeText('Shop Now')
            ->assertSeeText('Premium Oron crayfish from the heart of Nigeria')
            ->assertSeeText('All rights reserved.');
    }

    /**
     * @return array<string, array{non-empty-string, non-empty-string}>
     */
    public static function publicPages(): array
    {
        return [
            'home' => ['/', 'pages.home'],
            'our story' => ['/our-story', 'pages.our-story'],
            'products' => ['/products', 'pages.products'],
            'recipes' => ['/recipes', 'pages.recipes'],
            'contact' => ['/contact', 'pages.contact'],
        ];
    }

    public function test_home_page_renders_the_complete_campaign_content(): void
    {
        $response = $this->get('/');

        $response
            ->assertSeeTextInOrder([
                'Premium Quality',
                'Oron',
                'Crayfish',
                'A Taste of Home',
                'From Our Waters',
                'Support Sustainable Seafood',
            ])
            ->assertSee('images/home/hero-kitchen.webp')
            ->assertSee('images/home/krill-harvest-pouch.webp')
            ->assertSee('images/home/nigerian-crayfish-stew.webp')
            ->assertSee('images/home/sustainable-river.webp');
    }
}
