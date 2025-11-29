<?php

namespace SEOPressPro\Services\Forms\Schemas;

defined('ABSPATH') || exit;

use SEOPressPro\Core\FormApi;

class FormSchemaRecipe extends FormApi {
    protected function getTypeByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_recipes_desc':
            case '_seopress_pro_rich_snippets_recipes_ingredient':
            case '_seopress_pro_rich_snippets_recipes_instructions':
                return 'textarea';
            case '_seopress_pro_rich_snippets_recipes_name':
            case '_seopress_pro_rich_snippets_recipes_cat':
            case '_seopress_pro_rich_snippets_recipes_video':
            case '_seopress_pro_rich_snippets_recipes_yield':
            case '_seopress_pro_rich_snippets_recipes_keywords':
            case '_seopress_pro_rich_snippets_recipes_cuisine':
                return 'input';
            case '_seopress_pro_rich_snippets_recipes_prep_time':
            case '_seopress_pro_rich_snippets_recipes_cook_time':
            case '_seopress_pro_rich_snippets_recipes_calories':
                return 'number';
            case '_seopress_pro_rich_snippets_recipes_img':
                return 'upload';
        }
    }

    protected function getLabelByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_recipes_name':
                return __('Recipe name', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_desc':
                return __('Short recipe description', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_cat':
                return __('Recipe category', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_img':
                return __('Image', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_video':
                return __('Video URL of the recipe', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_prep_time':
                return __('Preparation time (in minutes)', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_cook_time':
                return __('Cooking time (in minutes)', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_calories':
                return __('Calories', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_yield':
                return __('Recipe yield', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_keywords':
                return __('Keywords', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_cuisine':
                return __('Recipe cuisine', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_ingredient':
                return __('Recipe ingredients', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_instructions':
                return __('Recipe instructions', 'webseo');
        }
    }

    protected function getDescriptionByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_recipes_img':
                return __('Minimum size: 185px by 185px, aspect ratio 1:1', 'webseo');
        }
    }

    protected function getPlaceholderByField($field) {
        switch ($field) {
            case '_seopress_pro_rich_snippets_recipes_name':
                return __('The name of your dish', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_desc':
                return __('A short summary describing the dish.', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_cat':
                return __('e.g. appetizer, entree, or dessert', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_img':
                return __('Select your image', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_video':
                return __('e.g. https://www.youtube.com/watch?v=p6v9Jd5lRIU', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_prep_time':
                return __('e.g. 30 min', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_cook_time':
                return __('e.g. 45 min', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_calories':
                return __('Number of calories', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_yield':
                return __('e.g. number of people served, or number of servings', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_keywords':
                return __('e.g. winter apple pie, nutmeg crust (NOT recommended: dessert, American)', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_cuisine':
                return __('The region associated with your recipe. For example, "French", Mediterranean", or "American"', 'webseo');
            case '_seopress_pro_rich_snippets_recipes_ingredient':
                return __("Ingredients used in the recipe. One ingredient per line. Include only the ingredient text that is necessary for making the recipe. Don't include unnecessary information, such as a definition of the ingredient.", 'webseo');
            case '_seopress_pro_rich_snippets_recipes_instructions':
                return __('e.g. Heat oven to 425°F. Include only text on how to make the recipe and don\'t include other text such as "Directions", "Watch the video", "Step 1".', 'webseo');
            default:
                return '';
        }
    }

    protected function getDetails($postId = null) {
        return [
            [
                'key' => '_seopress_pro_rich_snippets_recipes_name',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_recipes_desc',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_recipes_cat',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_recipes_img',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_recipes_video',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_recipes_prep_time',
                'min' => 1,
            ],
            [
                'key' => '_seopress_pro_rich_snippets_recipes_cook_time',
                'min' => 1,
            ],
            [
                'key' => '_seopress_pro_rich_snippets_recipes_calories',
                'min' => 1,
            ],
            [
                'key' => '_seopress_pro_rich_snippets_recipes_yield',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_recipes_keywords',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_recipes_cuisine',
            ],
            [
                'key' => '_seopress_pro_rich_snippets_recipes_ingredient',
                'class' => 'seopress-textarea-high-size'
            ],
            [
                'key' => '_seopress_pro_rich_snippets_recipes_instructions',
                'class' => 'seopress-textarea-high-size'
            ],
        ];
    }
}
