Stripe Subscription Using Laravel11 And Cashier

Follow the steps to learn subscription process :

1. composer require laravel/cashier

2. php artisan vendor:publish --tag="cashier-migrations"

3.php artisan migrate

4.php artisan vendor:publish --tag="cashier-config"

5. update .env 

STRIPE_KEY=your-stripe-key
STRIPE_SECRET=your-stripe-secret
STRIPE_WEBHOOK_SECRET=your-stripe-webhook-secret

6. Goto stripe dashboard => developer => api keys => get publishable keys and secret keys

7. Add billable to User model

8. Add Stripe CLI to environment variable windows, Login to terminal => run 'stripe login' and allow the access by the given link

9. Create Webhooks
php artisan cashier:webhook

10. To listen the webhooks events run "stripe listen --forward-to http://stripesubscriptionlaravelcashier.test/stripe/webhook" in the terminal after creating the webhook, webhook link is the app_url/stripe/webhook

11. In the step 10 u will get webhook secret something like "whsec_dd7e93e72a6d0255b9a1bf907125afa091924770f8a72ccfcadb877566ab8c10" copy and paste it to your STRIPE_WEBHOOK_SECRET in  the .env

12. Make a view for pricing, make a route for the view and add the link to the navigation bar

13. Add product from Product Catalogue in stripe dashbaord, one product with different price points like monthly, yearly, one off payment

14. Copy pricing ids from product price details in the dashboard and paste it to the route parameter in the pricing view

15. Make a invokable controller name checkout

16. Copy the content from laravel cashier documentation of selling subscription, and replace the 'default' in newSubscription() with the product id from stripe dashboard

17. Replace the $plan id coming from the request 
