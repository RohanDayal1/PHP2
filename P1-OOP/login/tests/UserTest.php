<?php

namespace Login\class;

use PHPUnit\Framework\TestCase;
use Login\class\Database;
use Login\class\User;

class UserTest extends TestCase {
    public $username;

        protected function setUp(): void {
            // Initialize User object
            $this->user = new User();
        }

        public function testLoginTrue(): void {
            // Test successful login with correct credentials
            $this->assertTrue($this->user->loginUser('Rohan', 'D'));
        }
    
        public function testLoginWithIncorrectUsername(): void {
            // Test login with incorrect username
            $this->assertFalse($this->user->loginUser('IncorrectUsername', 'D'));
        }
    
        public function testLoginWithIncorrectPassword(): void {
            // Test login with incorrect password
            $this->assertFalse($this->user->loginUser('Rohan', 'IncorrectPassword'));
        }

        public function testLoginUser(): void {
        // Test successful login
        $this->assertTrue($this->user->loginUser('Rohan', 'D'));

        // Test login with incorrect password (should fail)
        $this->assertFalse($this->user->loginUser('Rohan', 'JK'));

        // Test login with non-existent username (should fail)
        $this->assertFalse($this->user->loginUser('Lorem', 'D'));
    }

    public function testIsLoggedin(): void {
        // Test when not logged in
        $this->assertFalse($this->user->isLoggedin());

        // Test after successful login
        $this->user->loginUser('Rohan', 'D');
        $this->assertTrue($this->user->isLoggedin());
    }
      
}
