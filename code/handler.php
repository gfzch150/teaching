public function render($request, Throwable $exception){
        switch (true) {
            case $exception instanceof ModelNotFoundException:
                return response()->json([
                    'message' => 'Http not found.'
                ], 404);
    }
    return null;
}