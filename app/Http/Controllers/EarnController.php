<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EarnController extends Controller
{
    public function jobs() {
        $jobs = [
            (object) ['title' => 'Blockchain Developer', 'description' => 'Work on smart contracts.', 'image' => 'job1.jpg'],
            (object) ['title' => 'Solidity Engineer', 'description' => 'Develop Ethereum-based apps.', 'image' => 'job2.jpg'],
        ];
        return view('earn.jobs', compact('jobs'));
    }

    public function mining() {
        $mining = [
            (object) ['title' => 'Crypto Miner', 'description' => 'Mine Bitcoin.', 'image' => 'mining1.jpg'],
            (object) ['title' => 'Ethereum Staker', 'description' => 'Stake ETH.', 'image' => 'mining2.jpg'],
        ];
        return view('earn.mining', compact('mining'));
    }

    public function gaming() {
        return view('earn.gaming');
    }

    public function airdrop() {
        return view('earn.airdrop');
    }

    public function testnets() {
        return view('earn.testnets');
    }
}
