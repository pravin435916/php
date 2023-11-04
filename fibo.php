class fibo {
    private $n;

    public function __construct($n) {
        if (is_int($n) && $n >= 0) {
            $this->n = $n;
        } else {
            throw new InvalidArgumentException("Input must be a non-negative integer.");
        }
    }

    public function generateFibonacciSequence() {
        $sequence = array();
        if ($this->n >= 1) {
            $sequence[] = 0;
        }
        if ($this->n >= 2) {
            $sequence[] = 1;
        }

        for ($i = 2; $i < $this->n; $i++) {
            $next = $sequence[$i - 1] + $sequence[$i - 2];
            $sequence[] = $next;
        }

        return $sequence;
    }
}

try {
    $n = intval(readline("Enter a non-negative integer: "));
    $fibonacci = new Fibonacci($n);
    $sequence = $fibonacci->generateFibonacciSequence();

    echo "Fibonacci Sequence up to $n terms: " . implode(', ', $sequence) . "\n";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage() . "\n";
}

