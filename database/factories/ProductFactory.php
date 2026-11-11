<?php

namespace Database\Factories;

use App\Models\KategoriProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sku' => $this->faker->unique()->word(),
            'barcode' => $this->faker->unique()->ean13(),
            'kategori' => $this->faker->word(),
            'unit' => $this->faker->randomElement(['pcs', 'box', 'kg', 'liter']),
            'nama_produk' => $this->faker->word(),
            'deskripsi' => $this->faker->sentence(),
            'gambar' => $this->faker->imageUrl(),
            'stock' => $this->faker->numberBetween(0, 100),
            'harga_beli' => $this->faker->numberBetween(1000, 100000),
            'harga_jual' => $this->faker->numberBetween(1000, 100000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
