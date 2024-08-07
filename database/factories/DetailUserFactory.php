<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailUser>
 */
class DetailUserFactory extends Factory
{
    public function definition(): array
    {

        $roles = [
            "Software Developer",
            "Systems Analyst",
            "Database Administrator",
            "Network Engineer",
            "IT Support Specialist",
            "Security Analyst",
            "Project Manager",
            "Web Developer",
            "Cloud Engineer",
            "DevOps Engineer",
            "Technical Writer",
            "UX/UI Designer",
            "QA Tester",
            "Business Analyst",
            "Systems Architect",
            "IT Consultant",
            "Data Scientist",
            "Machine Learning Engineer",
            "Application Support Analyst",
            "Site Reliability Engineer",
            "Product Manager",
            "Help Desk Technician",
            "Infrastructure Engineer",
            "Embedded Systems Engineer",
            "Game Developer",

            "IT Operations Manager",
            "Systems Integrator",
            "Data Analyst",
            "Cybersecurity Specialist",
            "IT Auditor",
            "Sales Engineer",
            "Technical Project Manager",
            "Enterprise Architect",
            "ERP Consultant",
            "Digital Marketing Specialist",
            "Software Engineer",
            "Network Administrator",
            "Cloud Solutions Architect",
            "Configuration Manager",
            "Virtualization Engineer",
            "Mobile App Developer",
            "Systems Administrator",
            "IT Trainer",
            "Technology Manager",
            "Service Delivery Manager",
            "Big Data Engineer",
            "IT Compliance Manager",
            "Technical Support Engineer",
            "Data Engineer",
            "Infrastructure Architect",
            "Business Intelligence Analyst"
        ];


        return [
            'photo' => null,
            'role' => $this->faker->randomElement($roles),
            'contact_number' => $this->faker->phoneNumber(),
            'biography' => $this->faker->paragraph(3),
            'user_id' => $this->faker->unique()->numberBetween(1, User::count()),
            'updated_at' => null,

        ];
    }
}
