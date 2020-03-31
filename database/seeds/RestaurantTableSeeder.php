<?php

use App\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::create([
            'name' => 'Pizza Pizza',
            'email' => 'mark@pizzapizza.com',
            'phone' => '5146549879',
            'password' => '$2y$10$y5kqAI6HM3gLqcWdLVxscOfah1tj8liaBeAF6xcCTb8aJ0ornMvK2',
            'category_id' => 14,
            'image' => 'uploads/k0w0zyVQ8wWcGp7KkplGQkrnTY4sgp9bNA3SIRSb.png',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Pizza Hut',
            'email' => 'hut@pizzahut.com',
            'phone' => '5149889879',
            'password' => '$2y$10$zHxgRSJJufRX3KhIvqZ7ouWiKPVoaxSMWQYP15a6468yCA1tZtXXG',
            'category_id' => 14,
            'image' => 'uploads/m6h1UxxDsqGZlqq6mSgf6ivgMhWU52gR0iX9R1QS.jpeg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'KFC',
            'email' => 'kfc@gmail.com',
            'phone' => '5146549877',
            'password' => '$2y$10$fNlc/pFipndZ2mNpIKtd5e9GMeqCUzMD6QH7DiyrLDBF6IVkvq116',
            'category_id' => 9,
            'image' => 'uploads/4Pz9iVZMACVKBNf5OrANsPkCBajd4nagGz5CnDhD.jpeg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Ottavio',
            'email' => 'management@ottavio.com',
            'phone' => '4506549787',
            'password' => '$2y$10$P9VGRpOjLYqH./lsilogA.Zwj6Gi22Qp2e3vlB3E61CKSadcUuDeC',
            'category_id' => 7,
            'image' => 'uploads/n36STHaObnhYc0270RQakTBcb8i4ebrmAPRC2klE.jpeg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Subway',
            'email' => 'montreal@subway.com',
            'phone' => '5146449844',
            'password' => '$2y$10$Xw6TNAU9IJaJCWd/nIXDTOWQJjDWPPVE8U1ZMOYNl8zF3qwJCC9lu',
            'category_id' => 19,
            'image' => 'uploads/2PSFYLOJhEKfY6gl8yNNbgd3de2okpx1thi8Xza8.jpeg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Thaï Express',
            'email' => 'owner@thaiexpress.com',
            'phone' => '5145437766',
            'password' => '$2y$10$w.uvFGk7tRKOBTRS8MlpY.sw6YBSKbXSsSVsYEbdZNRYd5F1oJCnS',
            'category_id' => 12,
            'image' => 'uploads/AXLNLx9GKy3qRbSnLPyopCAiPq2suwck3FKz1Fmz.jpeg',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'Burger King',
            'email' => 'king@burgerking.com',
            'phone' => '5141123217',
            'password' => '$2y$10$aPQbkSdt1JLXMFKq.3cSMukW09N4HRxlyIUluKaEcV090Vkw6bz8u',
            'category_id' => 20,
            'image' => 'uploads/vmUhuBOGFo1evapnmuzPLKlvuhCWQE6sxo0RDde5.webp',
            'active' => 1
        ]);
        Restaurant::create([
            'name' => 'In-N-Out Burger',
            'email' => 'restaurants@in-n-out.com',
            'phone' => '4506339527',
            'password' => '$2y$10$BsHCqBhuPY0kO/od.M7dku6T560J38thfjNrM754HDz98SQs1Jbia',
            'category_id' => 20,
            'image' => 'uploads/vlBjPVQ9UfvVHY6EA3FJVNk93KIWgA0TgWhZSdJM.webp',
            'active' => 1
        ]);
    }
}
