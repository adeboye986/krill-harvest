<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PublicPagesTest extends TestCase
{
    /**
     * @param  non-empty-string  $uri
     * @param  non-empty-string  $view
     * @param  non-empty-string  $activeNavigationLabel
     */
    #[DataProvider('publicPages')]
    public function test_public_page_renders_its_view_with_shared_layout(
        string $uri,
        string $view,
        string $activeNavigationLabel,
    ): void {
        $response = $this->get($uri);
        $content = $response->getContent();

        $response
            ->assertOk()
            ->assertViewIs($view)
            ->assertSeeText('Krill Harvest')
            ->assertSeeText('Shop Now')
            ->assertSeeText('Premium Oron crayfish from the heart of Nigeria')
            ->assertSeeText('All rights reserved.')
            ->assertDontSee('>Sustainability<', false);

        $this->assertSame(2, substr_count($content, 'aria-current="page"'));
        $this->assertMatchesRegularExpression(
            '/aria-current="page"[^>]*>\s*'.preg_quote($activeNavigationLabel, '/').'\s*<\/a>/',
            $content,
        );
    }

    /**
     * @return array<string, array{non-empty-string, non-empty-string, non-empty-string}>
     */
    public static function publicPages(): array
    {
        return [
            'home' => ['/', 'pages.home', 'Home'],
            'our story' => ['/our-story', 'pages.our-story', 'Our Story'],
            'products' => ['/products', 'pages.products', 'Products'],
            'recipes' => ['/recipes', 'pages.recipes', 'Recipes'],
            'contact' => ['/contact', 'pages.contact', 'Contact'],
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

    public function test_our_story_page_renders_the_complete_brand_story(): void
    {
        $response = $this->get('/our-story');

        $response
            ->assertSeeTextInOrder([
                'A Rich Tradition',
                'More Than a Product,',
                'Authentic Origin',
                'Quality You Can Trust',
                'Good Food Brings People Together',
            ])
            ->assertSee('images/story/hero-river.webp')
            ->assertSee('images/home/krill-harvest-pouch.webp')
            ->assertSee('images/story/heritage-fisherman.webp')
            ->assertSee('images/story/quality-ground-crayfish.webp')
            ->assertSee('images/story/mangrove-cta.webp');
    }

    public function test_products_page_renders_the_complete_product_campaign(): void
    {
        $response = $this->get('/products');

        $response
            ->assertSeeTextInOrder([
                'Premium',
                'Oron Crayfish',
                'Rich flavor in every dish',
                'Add Authentic Flavor',
                'Sustainably Sourced',
                'Delicious Meals, Made Simple',
            ])
            ->assertSee('images/products/hero-kitchen.webp')
            ->assertSee('images/home/krill-harvest-pouch.webp')
            ->assertSee('images/products/pouch-back.webp')
            ->assertSee('images/home/nigerian-crayfish-stew.webp')
            ->assertSee('images/products/sourcing-river.webp');
    }

    public function test_recipes_page_renders_the_complete_recipe_campaign(): void
    {
        $response = $this->get('/recipes');

        $response
            ->assertSeeTextInOrder([
                'Real',
                'Nigerian Flavor',
                'Browse Recipes',
                'Featured Recipes',
                'Egusi Soup with Crayfish',
                'Nigerian Jollof Rice',
                'Okra Soup with Crayfish',
                'Join Our Recipe Community',
                'From Our Waters',
            ])
            ->assertSee('images/recipes/hero-kitchen.webp')
            ->assertSee('images/home/krill-harvest-pouch.webp')
            ->assertSee('images/recipes/egusi-soup.webp')
            ->assertSee('images/recipes/jollof-rice.webp')
            ->assertSee('images/recipes/okra-soup.webp')
            ->assertSee('images/recipes/recipe-book.webp')
            ->assertSee('images/story/quality-ground-crayfish.webp');
    }
}
