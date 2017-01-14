//
//  ViewController.m
//  GOC
//
//  Created by Tharindu Darshana on 12/17/16.
//  Copyright © 2016 tdk. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()
{
    NSString * qrvalue;
    NSString *str;
}

@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view, typically from a nib.
    UISwipeGestureRecognizer *rightSwipeGesture = [[UISwipeGestureRecognizer alloc] initWithTarget:self action:@selector(handleSwipeGesture:)];
    
    rightSwipeGesture.direction = UISwipeGestureRecognizerDirectionRight;
    
    [self.view addGestureRecognizer:rightSwipeGesture];
    
    
    [self.webView.scrollView.panGestureRecognizer requireGestureRecognizerToFail:rightSwipeGesture];
    
    
    self.isReading = NO;
    
    self.scannerView.hidden = true;
    NSString *urlAddress1 = @"http://192.168.8.104:8888/goc/index.php";
    NSURL *url = [NSURL URLWithString:urlAddress1];
    NSURLRequest *requestObj = [NSURLRequest requestWithURL:url];
    [self.webView loadRequest:requestObj];
//    [[self.webView mainFrame] loadRequest:[NSURLRequest requestWithURL:[NSURL URLWithString:urlText]]];
}


- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

- (void)handleSwipeGesture:(UISwipeGestureRecognizer *)gesture {
    NSLog(@"gesture recognized");
//    NSString *urlAddress2 = @"http://192.168.8.100:8888/goc/goc/index.php/Reservation";
//    NSURL *url = [NSURL URLWithString:urlAddress2];
//    NSURLRequest *requestObj = [NSURLRequest requestWithURL:url];
//    [self.webView loadRequest:requestObj];
}

- (BOOL)webView:(UIWebView *)webView
shouldStartLoadWithRequest:(NSURLRequest *)request
 navigationType:(UIWebViewNavigationType)navigationType {
    
    NSLog(@"request : %@",request);
    // these need to match the values defined in your JavaScript
    NSString *myAppScheme = @"myfakeappname";
    NSString *myActionType1 = @"myJavascriptActionType";
    NSString *myActionType2 = @"myJavascriptActionType2";
    NSString *myActionType3 = @"myJavascriptActionType3";
    
    // ignore legit webview requests so they load normally
    if (![request.URL.scheme isEqualToString:myAppScheme]) {
        return YES;
    }
    
    // get the action from the path
    NSString *actionType = request.URL.host;
    // deserialize the request JSON
//    NSString *jsonDictString = [request.URL.fragment stringByReplacingPercentEscapesUsingEncoding:NSASCIIStringEncoding];
    
    // look at the actionType and do whatever you want here
    if ([actionType isEqualToString:myActionType1]) {
        // do something in response to your javascript action
        // if you used an action parameters dict, deserialize and inspect it here
        NSLog(@"do something in response to your javascript action");
        str = @"clues";
        self.scannerView.hidden = false;
        [self callAMethod];
    }
    else if([actionType isEqualToString:myActionType2]){
        NSString *urlAddress2 = @"http://192.168.8.104:8888/goc/index.php/welcome/signIn";
            NSURL *url = [NSURL URLWithString:urlAddress2];
            NSURLRequest *requestObj = [NSURLRequest requestWithURL:url];
            [self.webView loadRequest:requestObj];
    }
    else if ([actionType isEqualToString:myActionType3]){
        NSLog(@"do something in response to your javascript action");
        self.scannerView.hidden = false;
        str = @"scanbill";
        [self callAMethod];
    }
    // make sure to return NO so that your webview doesn't try to load your made-up URL
    return NO;
}

- (void)callAMethod{
    if (!_isReading) {
        if ([self startReading]) {
                    }
    }
    else{
        [self stopReading];
       
    }
    
    _isReading = !_isReading;
    
    
}

- (BOOL)startReading {
    NSError *error;
    
    AVCaptureDevice *captureDevice = [AVCaptureDevice defaultDeviceWithMediaType:AVMediaTypeVideo];
    
    AVCaptureDeviceInput *input = [AVCaptureDeviceInput deviceInputWithDevice:captureDevice error:&error];
    if (!input) {
        NSLog(@"%@", [error localizedDescription]);
        return NO;
    }
    
    _captureSession = [[AVCaptureSession alloc] init];
    [_captureSession addInput:input];
    
    AVCaptureMetadataOutput *captureMetadataOutput = [[AVCaptureMetadataOutput alloc] init];
    [_captureSession addOutput:captureMetadataOutput];
    
    dispatch_queue_t dispatchQueue;
    dispatchQueue = dispatch_queue_create("myQueue", NULL);
    [captureMetadataOutput setMetadataObjectsDelegate:self queue:dispatchQueue];
    [captureMetadataOutput setMetadataObjectTypes:[NSArray arrayWithObject:AVMetadataObjectTypeQRCode]];
    
    _videoPreviewLayer = [[AVCaptureVideoPreviewLayer alloc] initWithSession:_captureSession];
    [_videoPreviewLayer setVideoGravity:AVLayerVideoGravityResizeAspectFill];
    [_videoPreviewLayer setFrame:self.scannerView.layer.bounds];
    [self.scannerView.layer addSublayer:_videoPreviewLayer];
    
    [_captureSession startRunning];
    
    return YES;
}

-(void)stopReading{
    [_captureSession stopRunning];
    _captureSession = nil;
    
    [_videoPreviewLayer removeFromSuperlayer];
    NSString *stringOne = qrvalue;
    NSString *javascriptString;
    if([str isEqualToString:@"clues"]){
        javascriptString = [NSString stringWithFormat:@"onScan(%@)", stringOne];
    }
    else if([str isEqualToString:@"scanbill"]){
        NSArray *array = [stringOne componentsSeparatedByString:@":"];
        javascriptString = [NSString stringWithFormat:@"onScan(%@,%@)", array[0], array[1]];
    }
    
    NSLog(@"%@",stringOne);
    [self.webView stringByEvaluatingJavaScriptFromString:javascriptString];
    NSLog(@"%@",self.webView.request.URL);
}

-(void)captureOutput:(AVCaptureOutput *)captureOutput didOutputMetadataObjects:(NSArray *)metadataObjects fromConnection:(AVCaptureConnection *)connection{
    if (metadataObjects != nil && [metadataObjects count] > 0) {
        AVMetadataMachineReadableCodeObject *metadataObj = [metadataObjects objectAtIndex:0];
        if ([[metadataObj type] isEqualToString:AVMetadataObjectTypeQRCode]) {
            
            qrvalue = metadataObj.stringValue;
            [self performSelectorOnMainThread:@selector(stopReading) withObject:nil waitUntilDone:NO];
            
            _isReading = NO;
            self.scannerView.hidden = true;
            
            NSLog(@"metadataObj: %@",metadataObj.stringValue);
        }
    }
}


@end
